<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 2/23/2016
 * Time: 11:32 PM
 */

namespace NovakSolutions\FrontDesk\Generate;


class V3Parser implements Parser {

    public function extractDefinitions($html){
        $definitions = array();
        /** @var \QueryPath $qp */
        $qp = htmlqp($html, '.super_group', array('ignore_parser_warnings' => true));

        /** @var \QueryPath\DOMQuery $group */
        foreach($qp as $group){
            if(strpos($group->attr('id'), "query-") === 0){
                $title = $group->find('h2')->text();
                $definitions[$title] = array();
                $url = $group->find('.method_details_list .url')->text();
                $action = $group->find('.method_details_list .action')->text();
                $tables = $group->find('.parameters > .data_table');
                $fields = $tables->first()->find('tr > th');
                foreach($fields as $field){
                    //If this th resides in a table that is in a td, then it is a sub table...
                    if($field->parent()->parent()->parent()->is('div')) {
                        $fieldName = trim($field->text());
                        $definitions[$title]['fields'][$fieldName] = array(
                            'type' => trim($field->next()->text()),
                            'description' => trim($field->next()->next()->text()),
                        );

                        $enumTables = $field->parent()->find('table');

                        if ($enumTables->length > 0) {
                            $definitions[$title]['fields'][$fieldName]['values'] = array();
                            foreach ($enumTables->first()->find('tr > th') as $enumValue) {
                                $definitions[$title]['fields'][$fieldName]['values'][$enumValue->text()] = $enumValue->next()->text();
                            }
                        }
                    } else {
                        echo 'Skipping Field Because It Is An Enum Value, Not A Field: ' . $field->text() . "\n";
                    }
                }
                $definitions[$title]['action'] = $action;
                $definitions[$title]['url'] = $url;
                
            }


        }

        return $definitions;
    }
}