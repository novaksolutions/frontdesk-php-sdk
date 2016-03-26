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
 * Class PutVisitById
 * @package NovakSolutions\FrontDesk\Operation\Desk
 * @property integer $person_id
 * @property string $state_event
 */
class PutVisitById extends Operation\Operation {
    public static $method = 'PUT';
    public static $urlPath = '/api/v2/desk/visits/:id';

    public static $fields = array(
        'person_id',
        'state_event',
    );

    public static function put($id, $data, $subdomain = null){
        $urlArguments = compact('id');
        self::makeRequest($urlArguments, $data, $subdomain);
    }
}