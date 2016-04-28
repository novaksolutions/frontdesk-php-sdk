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
    public static $httpMethod;
    public static $noSubdomain;

    public static function delete($id, $subDomain){
        return static::makeRequest(array('id' => $id), array(), array(), $subDomain);
    }

    public static function getById($id, $subDomain){
        return static::get(array('id' => $id), array(), $subDomain);
    }

    public static function get($urlArguments, $urlParameters, $subDomain){
        return static::makeRequest($urlArguments, $urlParameters, array(), $subDomain);
    }

    public static function post($data, $subDomain){
        return static::makeRequest(array(), array(), $data, $subDomain);
    }

    public static function put($id, $data, $subDomain){
        return static::makeRequest(array('id' => $id), array(), $data, $subDomain);
    }

    public static function makeRequest($urlArguments = array(), $urlParameters = array(), $postData = array(), $subDomain = null){
        $endPoint = static::$urlPath;
        foreach($urlArguments as $name => $value){
            $endPoint = str_replace(":" . $name, $value, $endPoint);
        }

        $endPoint .= '?' . http_build_query($urlParameters);

        return FrontDesk::call($endPoint, static::$httpMethod, $postData, $subDomain, static::$noSubdomain);
    }
}