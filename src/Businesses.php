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

    static $businessAccessTokens = array(

    );

    public static function get($businessSubdomain){
        if(isset(self::$businessAccessTokens[$businessSubdomain])){
            return self::$businessAccessTokens[$businessSubdomain];
        } else {
            return self::$businessAccessTokens[self::$defaultBusinessSubdomain];
        }
    }

    public static function add($businessSubdomain, $accessToken){
        self::$businessAccessTokens[$businessSubdomain] = $accessToken;
        if(static::$defaultBusinessSubdomain == ''){
            static::$defaultBusinessSubdomain = $businessSubdomain;
        }
    }
} 