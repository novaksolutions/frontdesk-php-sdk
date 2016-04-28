<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 2/29/2016
 * Time: 3:43 PM
 */
namespace NovakSolutions\FrontDesk\Filter;

abstract class Filter {
    public $operator = '';
    public $fieldName = '';
    public $value;
    public $value2;

    public static function getFilterForComparator($comparator){
        switch($comparator){
            case 'eq':
                return new EqualTo();
        }    
    }

    public abstract function getFrontDeskOperator();

    public function toFrontDeskReportingArray(){
        return array(
            $this->getFrontDeskOperator(),
            $this->fieldName,
            $this->value
        );
    }
} 