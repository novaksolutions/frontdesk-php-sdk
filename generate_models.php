<?php
use NovakSolutions\FrontDesk\Generate;

require_once('/vendor/autoload.php');


$v3Parser = new Generate\V3Parser();
$reportingApiDocsAsHtml = http_get_contents("https://developer.frontdeskhq.com/docs/reporting/v3");

$reportingDefinitions = $v3Parser->extractDefinitions($reportingApiDocsAsHtml);

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
$template = $twig->loadTemplate('model.twig');

foreach($reportingDefinitions as $objectName => $endPoints){
    $model = array();
    $model['modelName'] = preg_replace("[^A-Za-z0-9]", "", $objectName);
    $model['modelName'] = preg_replace('{s$}', '', $objectName);
    $model = array_merge($endPoints, $model);

    $frontOrDesk = 'Desk';
    $className = $model['modelName'];
    $baseClass = 'ReportingModel';

    $renderedTemplate = $template->render(compact('model', 'frontOrDesk', 'className', 'baseClass'));
    file_put_contents("src/Model/Desk/" . $className . '.php', $renderedTemplate);
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
