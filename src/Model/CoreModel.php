<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 2/29/2016
 * Time: 12:18 PM
 */

namespace NovakSolutions\FrontDesk\Model;
use NovakSolutions\FrontDesk;

class CoreModel{
    //Each of these will be overridden by the CoreModel itself.
    public static $getByIdOperationClassName = '';
    public static $putOperationClassName = '';
    public static $postOperationClassName = '';
    public static $deleteOperationClassName = '';
    public static $queryOperationClassName = '';

    public $businessSubdomain = '';
    public $data = array();

    public function __construct($id = null, $businessSubdomain = null){
        if($id !== null){
            if(static::$getByIdOperationClassName == ''){
                throw new \NovakSolutions\FrontDesk\Exception(get_class($this) . " does not have a getById Operation.  And cannot be loaded by id.");
            }
            $getClassName = static::$getByIdOperationClassName;
            $object = $getClassName::getById($id, $this->businessSubdomain);
            $this->loadFromArray($object['people'][0]);
        }

        if($businessSubdomain !== null){
            $this->businessSubdomain = $businessSubdomain;
        }
    }

    public function __get($key){
        if(in_array($key, static::$fields)){
            return isset($this->data[$key]) ? $this->data[$key] : null;
        } else {
            throw new \NovakSolutions\FrontDesk\Exception("$key is not a valid field for: " . get_class($this));
        }
    }

    public function __set($key, $value){
        if(in_array($key, static::$fields)){
            $this->data[$key] = $value;
        } else {
            throw new \NovakSolutions\FrontDesk\Exception("$key is not a valid field for: " . get_class($this));
        }
    }

    public function save(){
        if(isset($this->data['id'])){
            if(static::$putOperationClassName == ''){
                throw new \NovakSolutions\FrontDesk\Exception(get_class($this) . " does not have a put Operation.  And cannot be updated.");
            }
            $putClassName = static::$putOperationClassName;
            $results = $putClassName::put($this->data['id'], $this->data, $this->businessSubdomain);
            //Look at results, did it work or not??

            return null;
        } else {
            if(static::$postOperationClassName == ''){
                throw new \NovakSolutions\FrontDesk\Exception(get_class($this) . " does not have a post Operation.  And cannot be inserted.");
            }
            $postClassName = static::$postOperationClassName;
            $results = $postClassName::post(array('person' => $this->data), $this->businessSubdomain);
            //Look at results, did it work or not??

            return null;
        }
    }

    public function delete(){

    }

    public static function query($query, $page = 1, $perPage = 100, $businessSubdomain = ''){
        $query['page'] = $page;
        $query['per_page'] = $perPage;

        if(static::$queryOperationClassName == ''){
            throw new \NovakSolutions\FrontDesk\Exception(get_called_class() . " does not have a post Operation.  And cannot be inserted.");
        } else {
            $queryOperationClassName = static::$queryOperationClassName;
            $results = $queryOperationClassName::get(array(), $query, $businessSubdomain);
        }

        return $results;
    }

    public function loadFromArray(array $data){
        $this->data = $data;
    }
} 