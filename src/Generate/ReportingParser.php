<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 2/23/2016
 * Time: 11:32 PM
 */

namespace NovakSolutions\FrontDesk\Generate;


class ReportingParser extends Parser {

    public function extractDefinitions($html){
        $definitions = array();
        /** @var \QueryPath $qp */
        $qp = htmlqp($html, '.super_group', array('ignore_parser_warnings' => true));

        /** @var \QueryPath\DOMQuery $group */
        foreach($qp as $group){
            if(strpos($group->attr('id'), "query-") === 0){
                $title = $group->find('h2')->text();
                $definitions[$title] = array();
                $urlPath = $group->find('.method_details_list .url')->text();
                $method = $group->find('.method_details_list .action')->text();
                $tables = $group->find('.parameters > .data_table');
                $objectFields = $this->extractFieldsFromTables($tables);
                $definitions[$title]['fields'] = $objectFields;
                $definitions[$title]['method'] = $method;
                $definitions[$title]['urlPath'] = $urlPath;

            }


        }

        return $definitions;
    }
}