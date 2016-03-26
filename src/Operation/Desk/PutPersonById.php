<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 2/29/2016
 * Time: 2:48 PM
 */

namespace NovakSolutions\FrontDesk\Operation\Desk;
use NovakSolutions\FrontDesk\Operation;

/**
 * Class PutPersonById
 * @package NovakSolutions\FrontDesk\Operation\Desk
 */
class PutPersonById extends Operation\Operation {
    public static $method = 'PUT';
    public static $urlPath = '/v2/desk/people/:id';

    public static $fields = array(
    );

    public static function put($id, $data, $subdomain = null){
        $urlArguments = compact('id');
        self::makeRequest($urlArguments, $data, $subdomain);
    }
}