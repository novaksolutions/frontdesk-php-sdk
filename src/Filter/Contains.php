<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 2/29/2016
 * Time: 3:45 PM
 */

namespace NovakSolutions\FrontDesk\Filter;


class Contains extends Filter {
    public function getFrontDeskOperator(){
        return "contains";
    }
} 