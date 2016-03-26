<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 2/29/2016
 * Time: 2:48 PM
 */

namespace NovakSolutions\FrontDesk\Operation\Front;
use NovakSolutions\FrontDesk\Operation;

/**
 * Class GetPersonById
 * @package NovakSolutions\FrontDesk\Operation\Front
 */
class GetPersonById extends Operation\Operation {
    public static $method = 'GET';
    public static $urlPath = '/api/v2/front/people/:id';

    public static $fields = array(
    );

    public static function get($id, $subdomain = null){
        $urlArguments = compact('id');
        self::makeRequest($urlArguments, null, $subdomain);
    }
}