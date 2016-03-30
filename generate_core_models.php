<?php
use NovakSolutions\FrontDesk\Generate;
use Doctrine\Common\Inflector;

require_once('/vendor/autoload.php');

$coreParser = new Generate\CoreParser();
$coreApiDocsAsHtml = http_get_contents("https://developer.frontdeskhq.com/docs/api/v2");

$definitions = $coreParser->extractDataFromHtml($coreApiDocsAsHtml);
$modelDefinitions = $coreParser->convertToModels($definitions);

//Process Definitions Info Select, Update, Insert, etc...

/** @var mixed $models */


$template = getTwigTemplate();

$models = array();
/**
 * @param $selectMethod
 * @return string
 */

$baseClass = 'CoreModel';

foreach($modelDefinitions as $place => $models){
    foreach($models as $modelName => $model) {
        $standardMethods = array();

        $fields = $model['fields'];

        $renderedTemplate = $template->render(compact('model', 'baseClass'));
        if(!file_exists("src/Model/$place")) mkdir("src/Model/$place");
        file_put_contents("src/Model/$place/" . $modelName . '.php', $renderedTemplate);
    }
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

/**
 * @return Twig_TemplateInterface
 */
function getTwigTemplate(){
    $loader = new Twig_Loader_Filesystem('src/Generate/Templates');
    $twig = new Twig_Environment($loader);
    $function = new Twig_SimpleFunction('descriptionToPhpDocType',
        function ($type) {
            switch ($type) {
                case 'boolean':
                    return "boolean";
                default:
                    return $type;
            }
        }
    );

    $twig->addFunction($function);
    $template = $twig->loadTemplate('core_model.twig');
    return $template;
}
