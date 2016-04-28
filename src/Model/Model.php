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
    public $data = array();

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
} 