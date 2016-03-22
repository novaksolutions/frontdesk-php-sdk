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
 * Class PostWaitlistEntries
 * @package NovakSolutions\FrontDesk\Operation\Desk
 * @property integer $person_id
 * @property integer $event_occurrence_id
 */
class PostWaitlistEntries extends Operation\Operation {
    public static $endPoint = array(
        'method' => 'POST',
        'urlPath' => '/api/v2/desk/waitlist_entries'
    );

    public static $fields = array(
        'person_id',
        'event_occurrence_id',
    );
}