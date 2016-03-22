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
 * Class WaitlistEntrie
 * @package NovakSolutions\FrontDesk\Model\Front
 * @property integer $id
 * @property integer $person_id
 * @property integer $event_occurrence_id
 * @property string $state
 */
class WaitlistEntrie extends Model\CoreModel {
    public static $endPoints = array(
        'select' => array(
            'method' => 'GET',
            'urlPath' => '/api/v2/front/waitlist_entries/:id'
        )
    );

    public static $fields = array(
        'id',
        'person_id',
        'event_occurrence_id',
        'state',
    );
}