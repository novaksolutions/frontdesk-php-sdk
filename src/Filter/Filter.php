<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 2/29/2016
 * Time: 3:43 PM
 */
namespace NovakSolutions\FrontDesk\Filter;

class Filter {
    public $operator = '';
    public $fieldName = '';
    public $values = array();

    public abstract function getFrontDeskOperator();

    public function toFrontDeskReportingArray(){
        return array_merge(
            array(
                $this->operator,
                $this->fieldName,
            ),
            $this->values
        )
    }

} 