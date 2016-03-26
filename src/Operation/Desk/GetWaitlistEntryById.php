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
 * Class GetWaitlistEntryById
 * @package NovakSolutions\FrontDesk\Operation\Desk
 * @property integer $id
 * @property integer $person_id
 * @property integer $event_occurrence_id
 * @property string $state
 * @property timestamp $created_at
 * @property timestamp $updated_at
 */
class GetWaitlistEntryById extends Operation\Operation {
    public static $method = 'GET';
    public static $urlPath = '/api/v2/desk/waitlist_entries/:id';

    public static $fields = array(
        'id',
        'person_id',
        'event_occurrence_id',
        'state',
        'created_at',
        'updated_at',
    );

    public static function get($id, $subdomain = null){
        $urlArguments = compact('id');
        self::makeRequest($urlArguments, null, $subdomain);
    }
}