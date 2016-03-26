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
 * Class PostVisits
 * @package NovakSolutions\FrontDesk\Operation\Front
 * @property integer $person_id
 * @property integer $event_occurrence_id
 */
class PostVisits extends Operation\Operation {
    public static $method = 'POST';
    public static $urlPath = '/api/v2/front/visits';

    public static $fields = array(
        'person_id',
        'event_occurrence_id',
    );

    public static function post(, $data, $subdomain = null){
        $urlArguments = compact('');
        self::makeRequest($urlArguments, $data, $subdomain);
    }
}