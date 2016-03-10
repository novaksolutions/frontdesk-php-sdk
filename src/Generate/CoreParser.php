<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 2/23/2016
 * Time: 11:32 PM
 */

namespace NovakSolutions\FrontDesk\Generate;


class CoreParser extends Parser {

    public function extractDefinitions($html){
        $definitions = array();
        /** @var \QueryPath $objectDivs */
        $objectDivs = htmlqp($html, '.super_group[id*="endpoint-"]', array('ignore_parser_warnings' => true));

        /** @var \QueryPath\DOMQuery $objectDiv */
        foreach($objectDivs as $objectDiv){

            $title = trim($objectDiv->find('h2')->text());

            //Get the front section
                //Get any code sections, then proceed downwards looking for parameters...
                //Use the Curl Example to parse out fields...  json decode?

            //Get the Desk section
                //Get any code sections, then proceed downwards looking for parameters...
                //Use the Curl Example to parse out fields...  json decode?
            $definitions[$title] = array();
            $definitions[$title]['methods'] = array();

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
                        $methodDetails['method'] = $methodParts[0];
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

                        $definitions[$title]['methods'][] = $methodDetails;
                    }

                }
            }

//            $method = $objectDiv->find('.method_details_list .action')->text();
//            $tables = $objectDiv->find('.parameters > .data_table');
//            $fields = $tables->first()->find('tr > th');
//
//            foreach($fields as $field){
//                //If this th resides in a table that is in a td, then it is a sub table...
//                if($field->parent()->parent()->parent()->is('div')) {
//                    $fieldName = trim($field->text());
//                    $definitions[$title]['fields'][$fieldName] = array(
//                        'type' => trim($field->next()->text()),
//                        'description' => trim($field->next()->next()->text()),
//                        'name' => $fieldName
//                    );
//
//                    $enumTables = $field->parent()->find('table');
//
//                    if ($enumTables->length > 0) {
//                        $definitions[$title]['fields'][$fieldName]['values'] = array();
//                        foreach ($enumTables->first()->find('tr > th') as $enumValue) {
//                            $definitions[$title]['fields'][$fieldName]['values'][$enumValue->text()] = $enumValue->next()->text();
//                        }
//                    }
//                } else {
//                    echo 'Skipping Field Because It Is An Enum Value, Not A Field: ' . $field->text() . "\n";
//                }
//                $definitions[$title]['methods'][] = array();
//            }
//            $definitions[$title]['method'] = $method;
//            $definitions[$title]['urlPath'] = $urlPath;
        }

        return $definitions;
    }
}