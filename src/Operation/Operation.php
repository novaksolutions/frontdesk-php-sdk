<?php
namespace NovakSolutions\FrontDesk\Operation;
use NovakSolutions\FrontDesk\Businesses;
use NovakSolutions\FrontDesk\FrontDesk;

/**
 * Created by PhpStorm.
 * User: joey_000
 * Date: 3/11/2016
 * Time: 10:43 AM
 */
class Operation{
    //Just a placeholder for code completion, subclasses have this property defined.
    public static $urlPath;
    public static $method;

    public static function makeRequest($urlArguments, $postData, $subDomain = null){
        $endPoint = static::$urlPath;
        foreach($urlArguments as $name => $value){
            $endPoint = str_replace(":" . $name, $value, $endPoint);
        }

        return FrontDesk::call($endPoint, static::$method, $postData, $subDomain);
    }
}