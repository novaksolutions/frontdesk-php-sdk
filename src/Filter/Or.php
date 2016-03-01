<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 2/29/2016
 * Time: 3:43 PM
 */
namespace NovakSolutions\FrontDesk\Filter;

class OrFilter extends Filter{
    public function getFrontDeskOperator(){
        return "or";
    }
} 