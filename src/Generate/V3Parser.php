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
        $qp = qp($html, '.super_group', array('ignore_parser_warnings' => true));

        /** @var \QueryPath\DOMQuery $group */
        foreach($qp as $group){
            if(strpos($group->attr('id'), "query-") === 0){
                $title = $group->find('h2')->text();
                $definitions[$title] = array();
                $url = $group->find('.method_details_list .url')->text();
                $action = $group->find('.method_details_list .action')->text();

                $definitions[$title]['action'] = $action;
                $definitions[$title]['url'] = $url;
            }


        }

        var_dump($definitions);
        return $definitions;
    }
}