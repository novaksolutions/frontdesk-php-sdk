<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 2/29/2016
 * Time: 2:48 PM
 */

namespace NovakSolutions\FrontDesk\Model\Front;
use NovakSolutions\FrontDesk\Model;

/**
 * Class Visit
 * @package NovakSolutions\FrontDesk\Model\Front
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
class Visit extends Model\CoreModel {
    public static $endPoints = array(
        'select' => array(
            'method' => 'GET',
            'urlPath' => '/api/v2/front/visits/:id'
        )
    );

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
}