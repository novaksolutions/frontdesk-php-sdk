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
 * Class EventOccurrence
 * @package NovakSolutions\FrontDesk\Model\Front
 * @property int $id
 * @property int $event_id
 * @property string $name
 * @property string $description
 * @property int $service_id
 * @property int $location_id
 * @property string $start_at
 * @property string $end_at
 * @property string $url
 * @property string $timezone
 * @property string $state
 * @property string $full
 * @property int $capacity_remaining
 * @property string $staff_members
 */
class EventOccurrence extends Model\CoreModel {
    public static $endPoints = array(
        'select' => array(
            'method' => 'GET',
            'urlPath' => '/api/v2/front/event_occurrences'
        )
    );

    public static $fields = array(
        'id',
        'event_id',
        'name',
        'description',
        'service_id',
        'location_id',
        'start_at',
        'end_at',
        'url',
        'timezone',
        'state',
        'full',
        'capacity_remaining',
        'staff_members',
    );
}