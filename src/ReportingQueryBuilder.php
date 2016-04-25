<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 2/29/2016
 * Time: 12:20 PM
 */

namespace NovakSolutions\FrontDesk;


use NovakSolutions\FrontDesk\Model\Model;

class ReportingQueryBuilder extends QueryBuilder{

    public function __construct(Model $model){
        $this->model = $model;
    }

    public function get(){
        $resultSet = new ResultSet($this, $this->model);
        return $resultSet;
    }

    public function buildData(){

    }

    public function where($fieldName, $valueOrComparator, $value = null){
        if($value !== null){

        }
    }
} 