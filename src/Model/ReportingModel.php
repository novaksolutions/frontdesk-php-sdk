<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 2/29/2016
 * Time: 12:18 PM
 */

namespace NovakSolutions\FrontDesk\Model;
use NovakSolutions\FrontDesk;

class ReportingModel extends Model {
    public static function newQuery(){
        return new FrontDesk\ReportingQueryBuilder();
    }

    public static function where($fieldName, $valueOrComparator, $value = ''){
        $query = static::newQuery();
        $query->model = new static();
        $query->where($fieldName, $valueOrComparator, $value);
        return $query;
    }
} 