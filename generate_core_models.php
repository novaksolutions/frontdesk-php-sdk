<?php
use NovakSolutions\FrontDesk\Generate;

require_once('/vendor/autoload.php');

$coreParser = new Generate\CoreParser();
$coreApiDocsAsHtml = http_get_contents("https://developer.frontdeskhq.com/docs/api/v2");

$reportingDefinitions = $coreParser->extractDefinitions($coreApiDocsAsHtml);

//Process Definitions Info Select, Update, Insert, etc...

/** @var mixed $models */
$models = array();

$loader = new Twig_Loader_Filesystem('src/Generate/Templates');
$twig = new Twig_Environment($loader);
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
$template = $twig->loadTemplate('core_model.twig');

foreach($reportingDefinitions as $objectName => $objectDetails){
    $standardMethods = array();
    $selectMethod = null;
    foreach($objectDetails['methods'] as $method){
        if($method['method'] == 'GET'){
            $selectMethod = $method;
            break;
        }
    }

    $fields = null;
    if(isset($selectMethod['fields'])){
        $fields = $selectMethod['fields'];
    } elseif(isset($selectMethod['json_response']) && $selectMethod['json_response'] != null){
        $fields = array();
        $responseRecords = array_shift($selectMethod['json_response']);
        $singleRecord = array_shift($responseRecords);
        foreach($singleRecord as $fieldName => $sampleValue){
            $fields[$fieldName] = array(
                'type' => 'string',
                'name' => $fieldName,
                'description' => ''
            );

            if(is_numeric($sampleValue) && $sampleValue % 1 == 0){
                $fields[$fieldName]['type'] = 'int';
            } elseif(is_numeric($sampleValue)){
                $fields[$fieldName]['type'] = 'float';
            }
        }
    }

    $model = array();
    $model['modelName'] = preg_replace("[^A-Za-z0-9]", "", $objectName);
    $model['modelName'] = preg_replace('{s$}', '', $model['modelName']);

    if(strpos($selectMethod['url'], '/api/v2/desk/') === 0){
        $frontOrDesk = 'Desk';
    } else {
        $frontOrDesk = 'Front';
    }

    $className = $model['modelName'];
    $baseClass = 'CoreModel';

    $renderedTemplate = $template->render(compact('model', 'frontOrDesk', 'className', 'baseClass'));

    file_put_contents("src/Model/{$frontOrDesk}/" . $className . '.php', $renderedTemplate);
}

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
