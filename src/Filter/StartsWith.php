<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 2/29/2016
 * Time: 3:48 PM
 */

namespace NovakSolutions\FrontDesk\Filter;


class StartsWith extends Filter {
    public function getFrontDeskOperator(){
        return "starts";
    }
}