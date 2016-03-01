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
} 