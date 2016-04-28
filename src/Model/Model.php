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

    public function toArray(){
        return $this->data;
    }

    public static function all(){
        $query = static::newQuery();
        $query->model = new static();
        return $query->all();
    }

    public static function find($key){

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

    public function __get($fieldName){
        if(in_array($fieldName, static::$fields)){
            return $this->data[$fieldName];
        } else {
            throw new \Exception("Invalid Field Name: " . $fieldName);
        }
    }
} 