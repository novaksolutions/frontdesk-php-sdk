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
 * Class GetWaitlistEntryById
 * @package NovakSolutions\FrontDesk\Operation\Front
 * @property integer $id
 * @property integer $person_id
 * @property integer $event_occurrence_id
 * @property string $state
 */
class GetWaitlistEntryById extends Operation\Operation {
    public static $endPoint = array(
        'method' => 'GET',
        'urlPath' => '/api/v2/front/waitlist_entries/:id'
    );

    public static $fields = array(
        'id',
        'person_id',
        'event_occurrence_id',
        'state',
    );
}