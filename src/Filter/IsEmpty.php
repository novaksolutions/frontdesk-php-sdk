<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 2/29/2016
 * Time: 3:46 PM
 */

namespace NovakSolutions\FrontDesk\Filter;


class IsEmpty extends Filter {
    public function getFrontDeskOperator(){
        return "ends";
    }
} 