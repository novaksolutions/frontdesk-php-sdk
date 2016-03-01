<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 2/29/2016
 * Time: 12:43 PM
 */

namespace NovakSolutions\FrontDesk;


class Businesses {
    public static $defaultBusinessSubdomain = '';

    static $businesses = array(

    );

    public static function get($businessSubdomain){
        if(isset(self::$businesses[$businessSubdomain])){
            return self::$businesses[$businessSubdomain];
        } else {
            return self::$businesses[self::$defaultBusinessSubdomain];
        }
    }

    public static function add($businessSubdomain, $data){
        self::$businesses[$businessSubdomain] = $data;
        if(static::$defaultBusinessSubdomain == ''){
            static::$defaultBusinessSubdomain = $businessSubdomain;
        }
    }
} 