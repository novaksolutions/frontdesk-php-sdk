<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 2/29/2016
 * Time: 12:18 PM
 */

namespace NovakSolutions\FrontDesk\Model;
use NovakSolutions\FrontDesk;

class Model {
    public static $endPoints;

    public $data = array();

    public static function all(){
        $query = static::newQuery();
        $query->model = new static();
        return $query->all();
    }

    public static function find($key){

    }

    public static function where($fieldName, $valueOrComparator, $value = ''){
        $query = static::newQuery();
        $query->model = new static();
        $query->where($fieldName, $valueOrComparator, $value = '');
        return $query;
    }

    /**
     * @returns FrontDesk\QueryBuilder
     */
    public static function newQuery(){

    }

    public static function getFields(){
        return static::$fields;
    }

    public function setData(array $data){
        $this->data = $data;
    }
} 