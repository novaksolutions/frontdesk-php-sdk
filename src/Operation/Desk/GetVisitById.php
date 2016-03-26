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
 * Class GetVisitById
 * @package NovakSolutions\FrontDesk\Operation\Desk
 * @property integer $person_id
 * @property string $state
 * @property integer $event_occurrence_id
 * @property timestamp $registered_at
 * @property timestamp $completed_at
 * @property timestamp $noshow_at
 * @property timestamp $cancelled_at
 * @property timestamp $created_at
 * @property boolean $paid
 * @property string $paid_for_by
 * @property integer $punch_id
 */
class GetVisitById extends Operation\Operation {
    public static $method = 'GET';
    public static $urlPath = '/api/v2/desk/visits/:id';

    public static $fields = array(
        'person_id',
        'state',
        'event_occurrence_id',
        'registered_at',
        'completed_at',
        'noshow_at',
        'cancelled_at',
        'created_at',
        'paid',
        'paid_for_by',
        'punch_id',
    );

    public static function get($id, $subdomain = null){
        $urlArguments = compact('id');
        self::makeRequest($urlArguments, null, $subdomain);
    }
}