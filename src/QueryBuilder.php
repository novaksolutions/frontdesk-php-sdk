<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 2/29/2016
 * Time: 3:11 PM
 */
namespace NovakSolutions\FrontDesk;

/**
 * Class QueryBuilder
 * @package NovakSolutions\FrontDesk
 * @property Model\Model $model
 */
class QueryBuilder {
    public $model;
    public $filters = array();
    public $businessKey = null;
    public $sort = '';

    public function all(){
        $records = array();
        $resultSet = new ResultSet($this, $this->model);

        /** @var Model\ReportingModel $result */
        foreach($resultSet as $result){
            $records[] = $result;
        }

        return $records;
    }

    public function getFields(){
        return $this->model->getFields();
    }
    
    public function query(){
        $records = array();
        $resultSet = new ResultSet($this, $this->model);

        /** @var Model\ReportingModel $result */
        foreach($resultSet as $result){
            $records[] = $result;
        }

        return $records;
    }
} 