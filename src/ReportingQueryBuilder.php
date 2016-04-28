<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 2/29/2016
 * Time: 12:20 PM
 */

namespace NovakSolutions\FrontDesk;


use NovakSolutions\FrontDesk\Filter\Filter;

class ReportingQueryBuilder extends QueryBuilder{


    public function get(){
        $resultSet = new ResultSet($this, $this->model);
        return $resultSet->nextPage();
    }

    public function buildData(){

    }

    public function where($fieldName, $valueOrComparator, $value = null, $value2 = null){
        if($value === null){
            $value = $valueOrComparator;
            $comparator = 'eq';
        } else {
            $comparator = $valueOrComparator;
        }

        $filter = Filter::getFilterForComparator($comparator);
        $filter->fieldName = $fieldName;
        $filter->value = $value;
        $filter->value2 = $value2;
        $this->filters[] = $filter;
    }

    public function buildCriteriaForRequest(){
        /** @var Filter $filter */
        $filters = array();
        foreach($this->filters as $filter){
            $filters[] = $filter->toFrontDeskReportingArray();
        }
        return array(
            'and',
            $filters
        );
    }
} 