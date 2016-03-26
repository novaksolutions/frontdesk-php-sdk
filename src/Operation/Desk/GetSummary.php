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
 * Class GetSummary
 * @package NovakSolutions\FrontDesk\Operation\Desk
 */
class GetSummary extends Operation\Operation {
    public static $method = 'GET';
    public static $urlPath = '/api/v2/desk/people/:person_id/visits/summary';

    public static $fields = array(
    );

    public static function get($person_id, $subdomain = null){
        $urlArguments = compact('person_id');
        self::makeRequest($urlArguments, null, $subdomain);
    }
}