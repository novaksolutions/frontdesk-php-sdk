<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 2/23/2016
 * Time: 11:32 PM
 */

namespace NovakSolutions\FrontDesk\Generate;
use Doctrine\Common\Inflector;

class CoreParser extends Parser {

    public function extractDataFromHtml($html){
        $data = array();
        /** @var \QueryPath $objectDivs */
        $objectDivs = htmlqp($html, '.super_group[id*="endpoint-"]', array('ignore_parser_warnings' => true));

        /** @var \QueryPath\DOMQuery $objectDiv */
        $count = 0;
        foreach($objectDivs as $objectDiv){
//            if($count > 4){
//                break;
//            }
//
//            $count++;
            $title = trim($objectDiv->find('h2')->text());

            //Get the front section
                //Get any code sections, then proceed downwards looking for parameters...
                //Use the Curl Example to parse out fields...  json decode?

            //Get the Desk section
                //Get any code sections, then proceed downwards looking for parameters...
                //Use the Curl Example to parse out fields...  json decode?
            $data[$title] = array();
            $data[$title]['methods'] = array();

            $objectMethodElements = $objectDiv->find('code.get_example');
            foreach($objectMethodElements as $methodElement){
                foreach($methodElement->contents() as $methodElementChildNode){

                    //Sometimes there will be "text"<br/>"text", which would be 3 nodes, we want the text, but not the <br/>
                    if($methodElementChildNode->text() != ""){
                        $methodDetails = array();
                        $methodParts = explode(" ", trim($methodElementChildNode->text()));
                        if(count($methodParts) != 2){
                            throw new \Exception("Ack!  MethodElement text has more then one space...  " . trim($methodElement->text()));
                        }
                        $methodDetails['httpMethod'] = $methodParts[0];
                        $methodDetails['url'] = $methodParts[1];

                        $methodDetails['description'] = trim($methodElement->next()->text());
                        //Get json for return fields, etc...
                        $siblingElements = $methodElement->nextUntil(".get_example");

                        $codeElements = $siblingElements->filter("code");
                        if($codeElements->count() > 0){
                            $codeElement = $codeElements->eq(0);
                            $requestResponseElements = $codeElement->children("pre");
                            $responseElement = $requestResponseElements->eq(1);

                            $jsonResponse = $responseElement->text();
                            $methodDetails['json_response'] = json_decode($jsonResponse, true);
                        }


                        $parametersTable = $siblingElements->filter("table");
                        if($parametersTable->count() > 0){
                            $parameters = $this->extractFieldsFromTables($parametersTable);
                            if($siblingElements->find("h4")->text() == 'Attributes'){
                                $methodDetails['fields'] = $parameters;
                            } else {
                                $methodDetails['parameters'] = $parameters;
                            }
                        } else {
                            $methodDetails['parameters'] = array();
                        }

                        $data[$title]['methods'][] = $methodDetails;
                    }
                }
            }
        }

        return $data;
    }

    function convertToModels($dataFromHtml){
        $allModels = array(
            'Front' => array(

            ),
            'Desk' => array(

            ),
            'Account' => array(

            )
        );

        foreach($dataFromHtml as $methodGroup){
            foreach($methodGroup['methods'] as $method){
                $modelName = $this->buildModelNameFromEndPoint($method['url']);
                $place = $this->getMethodPlace($method);
                if(!isset($allModels[$place][$modelName])){
                    $allModels[$place][$modelName] = array(
                        'place' => $place,
                        'name' => $modelName,
                        'fields' => array(),
                        'operations' => array(),
                        'postOperationClassName' => '',
                        'deleteOperationClassName' => '',
                        'getByIdOperationClassName' => '',
                        'putOperationClassName' => '',
                        'queryOperationClassName' => '',
                        'definition' => $methodGroup
                    );
                }
                $operationName = $this->buildOperationNameFromEndPoint($method['httpMethod'], $method['url']);
                $allModels[$place][$modelName]['operations'][] = $operationName;
                $methodName = $this->buildMethodNameFromEndPoint($method['httpMethod'], $method['url']);
                $arguments = $this->getUrlArguments($method['url']);
                $allModels[$place][$modelName][$methodName] = $arguments;


                $operationNamespace = "\\NovakSolutions\\FrontDesk\\Operation\\$place\\";
                if("Get" . $modelName . 'ById' == $operationName){
                    $allModels[$place][$modelName]['getByIdOperationClassName'] = $operationNamespace . "Get" . $modelName . 'ById';
                }

                if("Delete" . $modelName . 'ById' == $operationName){
                    $allModels[$place][$modelName]['deleteOperationClassName'] = $operationNamespace . "Delete" . $modelName . 'ById';
                }

                if("Put" . $modelName . 'ById' == $operationName){
                    $allModels[$place][$modelName]['putOperationClassName'] = $operationNamespace . "Put" . $modelName . 'ById';
                }

                if("Post" . $modelName == $operationName){
                    $allModels[$place][$modelName]['postOperationClassName'] = $operationNamespace . "Post" . $modelName;
                }

                if("Get" . Inflector\Inflector::pluralize($modelName)  == $operationName){
                    $allModels[$place][$modelName]['queryOperationClassName'] = $operationNamespace . "Get" . Inflector\Inflector::pluralize($modelName);
                }

                if("Get" . $modelName  == $operationName){
                    $allModels[$place][$modelName]['queryOperationClassName'] = $operationNamespace . "Get" . $modelName;
                }

                if(strpos($operationName, "Get") === 0 && count($allModels[$place][$modelName]['fields']) == 0){
                    $allModels[$place][$modelName]['fields'] =  $this->extractFields($method, $modelName);
                }
            }
        }

        return $allModels;
    }

    function buildModelNameFromEndPoint($endPointUrl){
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
            $className = Inflector\Inflector::classify(Inflector\Inflector::singularize($secondToLastPiece));
        } elseif($secondToLastPiece == 'Account') {
            $className = Inflector\Inflector::classify($secondToLastPiece) . Inflector\Inflector::classify(Inflector\Inflector::singularize($lastPiece));
        } else {
            $className = Inflector\Inflector::classify(Inflector\Inflector::singularize($lastPiece));
        }

        return $className;
    }


    public static function buildOperationNameFromEndPoint($httpMethod, $endPointUrl){
        $endPointUrl = str_replace("/api/v2/", "", $endPointUrl);
        $endPointUrl = str_replace("/v2/", "", $endPointUrl);

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
            $className = ucwords(strtolower($httpMethod)) . Inflector\Inflector::classify(Inflector\Inflector::singularize($secondToLastPiece)) . 'ById';
        } elseif(strpos($secondToLastPiece, ":") !== false) {
            $className = ucwords(strtolower($httpMethod)) . Inflector\Inflector::pluralize(Inflector\Inflector::classify($lastPiece)) . 'By' . Inflector\Inflector::classify(str_replace(":", "", $secondToLastPiece));
        } else {
            //None of the posts accept more then one record (I believe, not verified).
            if($httpMethod == 'POST'){
                $className = ucwords(strtolower($httpMethod)) . Inflector\Inflector::singularize(Inflector\Inflector::classify($lastPiece));
            } else {
                $className = ucwords(strtolower($httpMethod)) . Inflector\Inflector::classify($lastPiece);
            }

        }

        return $className;
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

        if($method == 'DELETE'){
            $methodName = 'delete';
        } elseif($method == 'POST') {
            $methodName = 'post';
        } elseif($method == 'PUT') {
            $methodName = 'put';
        } elseif($lastPiece == ':id'){
            $methodName = strtolower($method) . 'ById';
        } elseif(strpos($secondToLastPiece, ":") !== false) {
            $methodName = strtolower($method) . 'By' . Inflector\Inflector::classify(str_replace(":", "", $secondToLastPiece));
        } else {
            if(Inflector\Inflector::pluralize($lastPiece) == $lastPiece){
                $methodName = strtolower($method) . 'All';
            } else {
                $methodName = strtolower($method);
            }

        }

        return $methodName;
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

    public function getMethodPlace($method){
        if(strpos($method['url'], '/desk/') !== false){
            $place = 'Desk';
        } elseif(strpos($method['url'], '/front/') !== false) {
            $place = 'Front';
        } else {
            $place = 'Account';
        }
        return $place;
    }

    public function extractFields($method){
        $fields = null;
        if (isset($method['fields'])) {
            $fields = $method['fields'];
            return $fields;
        } elseif (isset($method['json_response']) && $method['json_response'] != null) {
            $fields = array();
            $responseRecords = array_shift($method['json_response']);
            switch($method['url']){
                case '/api/v2/front/branding':
                    $singleRecord = $responseRecords;
                    break;
                case '/api/v2/front/appointments/:service_id/available_slots/summary':
                case '/api/v2/desk/appointments/:service_id/available_slots/summary':
                    $singleRecord = array();
                    break;
                default:
                    $singleRecord = array_shift($responseRecords);
                    break;
            }

            foreach ($singleRecord as $fieldName => $sampleValue) {
                $fields[$fieldName] = array(
                    'type' => 'string',
                    'name' => $fieldName,
                    'description' => ''
                );

                if (is_numeric($sampleValue) && $sampleValue % 1 == 0) {
                    $fields[$fieldName]['type'] = 'int';
                } elseif (is_numeric($sampleValue)) {
                    $fields[$fieldName]['type'] = 'float';
                }
            }
            return $fields;
        }
        return $fields;
    }
}

