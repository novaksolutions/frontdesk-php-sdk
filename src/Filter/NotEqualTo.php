<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 2/29/2016
 * Time: 3:47 PM
 */

namespace NovakSolutions\FrontDesk\Filter;


class NotEqualTo extends Filter {
    public function getFrontDeskOperator(){
        return "neq";
    }
} 