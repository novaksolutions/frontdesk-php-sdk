<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 2/29/2016
 * Time: 12:20 PM
 */

namespace NovakSolutions\FrontDesk;


class ReportingQueryBuilder extends QueryBuilder{


    public function get(){
        $resultSet = new ResultSet($this, $this->model);
        return $resultSet->nextPage();
    }

    public function buildData(){

    }

    public function where($fieldName, $valueOrComparator, $value = null){
        if($value !== null){

        }
    }
} 