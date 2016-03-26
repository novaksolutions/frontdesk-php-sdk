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
 * Class GetEventOccurrenceById
 * @package NovakSolutions\FrontDesk\Operation\Desk
 */
class GetEventOccurrenceById extends Operation\Operation {
    public static $method = 'GET';
    public static $urlPath = '/api/v2/desk/event_occurrences/:id';

    public static $fields = array(
    );

    public static function get($id, $subdomain = null){
        $urlArguments = compact('id');
        self::makeRequest($urlArguments, null, $subdomain);
    }
}