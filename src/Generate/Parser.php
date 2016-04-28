<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 2/23/2016
 * Time: 11:32 PM
 */

namespace NovakSolutions\FrontDesk\Generate;


abstract class Parser {
    public abstract function extractDataFromHtml($html);

    /**
     * @param $tables
     * @return array
     */
    /**
     * @param $tables
     * @return array
     */
    public function extractFieldsFromTables($tables)
    {
        $objectFields = array();
        $fields = $tables->first()->find('tr > th:first-child');
        foreach ($fields as $field) {
            //If this th resides in a table that is in a td, then it is a sub table...
            if ($field->parent()->parent()->parent()->is('div')) {
                $fieldName = trim($field->text());
                $objectFields[$fieldName] = array(
                    'type' => trim($field->next()->text()),
                    'description' => trim($field->next()->next()->text()),
                    'name' => $fieldName
                );

                $enumTables = $field->parent()->find('table');

                if ($enumTables->length > 0) {
                    $objectFields[$fieldName]['values'] = array();
                    foreach ($enumTables->first()->find('tr > th') as $enumValue) {
                        $objectFields[$fieldName]['values'][$enumValue->text()] = $enumValue->next()->text();
                    }
                }
            } else {
                echo 'Skipping Field Because It Is An Enum Value, Not A Field: ' . $field->text() . "\n";
            }
        }
        return $objectFields;
    }
} 