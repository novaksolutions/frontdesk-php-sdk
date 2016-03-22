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
 * Class Service
 * @package NovakSolutions\FrontDesk\Model\Front
 * @property int $id
 * @property string $name
 * @property string $type
 * @property int $position
 * @property string $description
 * @property string $description_short
 * @property string $instructions
 * @property int $duration_in_minutes
 * @property int $enrollment_window_blackout_minutes
 * @property int $free_cancellation_window_in_hours
 * @property string $clients_can_book
 * @property string $members_can_book
 * @property string $require_cc
 * @property string $require_plan
 * @property int $maximum_clients
 * @property int $calendar_color
 * @property int $category_id
 * @property string $category_name
 * @property string $pricing
 */
class Service extends Model\CoreModel {
    public static $endPoints = array(
        'select' => array(
            'method' => 'GET',
            'urlPath' => '/api/v2/front/services'
        )
    );

    public static $fields = array(
        'id',
        'name',
        'type',
        'position',
        'description',
        'description_short',
        'instructions',
        'duration_in_minutes',
        'enrollment_window_blackout_minutes',
        'free_cancellation_window_in_hours',
        'clients_can_book',
        'members_can_book',
        'require_cc',
        'require_plan',
        'maximum_clients',
        'calendar_color',
        'category_id',
        'category_name',
        'pricing',
    );
}