<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 2/29/2016
 * Time: 3:44 PM
 */

namespace NovakSolutions\FrontDesk\Filter;


class Between extends Filter {
    public function getFrontDeskOperator(){
        return "btw";
    }
} 