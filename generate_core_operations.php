<?php
use NovakSolutions\FrontDesk\Generate;
use Doctrine\Common\Inflector;

require_once('/vendor/autoload.php');

$coreParser = new Generate\CoreParser();
$coreApiDocsAsHtml = http_get_contents("https://developer.frontdeskhq.com/docs/api/v2");

$coreDefinitions = $coreParser->extractDefinitions($coreApiDocsAsHtml);

//Process Definitions Info Select, Update, Insert, etc...

/** @var mixed $models */
$models = array();

$loader = new Twig_Loader_Filesystem('src/Generate/Templates');
$twig = new Twig_Environment($loader);
$twig->addExtension(new Twig_Extension_Debug());
$twig->setCache(false);
$function = new Twig_SimpleFunction('descriptionToPhpDocType',
    function ($type) {
        switch($type){
            case 'boolean':
                return "boolean";
            default:
                return $type;
        }
    }
);

$twig->addFunction($function);
$template = $twig->loadTemplate('core_operation.twig');
$endPoints = array();
foreach($coreDefinitions as $objectName => $objectDetails){
    $standardMethods = array();
    $selectMethod = null;
    foreach($objectDetails['methods'] as $method){
        //The Account operation is neither front nor desk.
        $frontOrDesk = '';
        if(strpos($method['url'], "/front/") !== false){
            $frontOrDesk = '\Front';
        } elseif (strpos($method['url'], "/desk/") !== false){
            $frontOrDesk = '\Desk';
        }
        $className = buildMethodNameFromEndPoint($method['method'], $method['url']);
        $urlArguments = getUrlArguments($method['url']);

        $fileName = "src/Operation/{$frontOrDesk}/" . $className . '.php';
        if(file_exists($fileName)){
            unlink($fileName);
        }

        $renderedTemplate = $template->render(compact('method', 'frontOrDesk', 'className', 'urlArguments'));

        file_put_contents($fileName, $renderedTemplate);
    }



}

echo implode("\n", $endPoints);

function http_get_contents($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    if(FALSE === ($retval = curl_exec($ch))) {
        error_log(curl_error($ch));
    } else {
        return $retval;
    }
}

function getStandardMethodsForObject($objectName, $definitions){
    //foreach($definitions[''])
}

function buildMethodNameFromEndPoint($method, $endPointUrl){
    $endPointUrl = str_replace("/api/v2/", "", $endPointUrl);

    if(strpos($endPointUrl, ".json") !== false){
        $endPointUrl = str_replace(".json", "", $endPointUrl);
    }

    if(strpos($endPointUrl, '?') !== false){
        $urlParts = explode("?", $endPointUrl);
        $endPointUrl = array_shift($urlParts);;
    }
    $urlPieces = explode("/", $endPointUrl);
    end($urlPieces);
    $lastPiece = current($urlPieces);
    prev($urlPieces);
    $secondToLastPiece = current($urlPieces);



    if($lastPiece == ':id'){
        $className = ucwords(strtolower($method)) . Inflector\Inflector::classify(Inflector\Inflector::singularize($secondToLastPiece)) . 'ById';
    } elseif(strpos($secondToLastPiece, ":") !== false) {
        $className = ucwords(strtolower($method)) . Inflector\Inflector::pluralize(Inflector\Inflector::classify($lastPiece)) . 'By' . Inflector\Inflector::classify(str_replace(":", "", $secondToLastPiece));
    } else {
        $className = ucwords(strtolower($method)) . Inflector\Inflector::classify($lastPiece);
    }

    return $className;
}

function getUrlArguments($endPointUrl){
    $urlArguments = array();

    $endPointUrl = str_replace("/api/v2/", "", $endPointUrl);

    if(strpos($endPointUrl, ".json") !== false){
        $endPointUrl = str_replace(".json", "", $endPointUrl);
    }

    if(strpos($endPointUrl, '?') !== false){
        $urlParts = explode("?", $endPointUrl);
        $endPointUrl = array_shift($urlParts);;
    }
    $urlPieces = explode("/", $endPointUrl);
    foreach($urlPieces as $urlPiece){
        if(strpos($urlPiece, ":") === 0){
            $urlArguments = str_replace(":", "", $urlPiece);
        }
    }

    return $urlArguments;
}
