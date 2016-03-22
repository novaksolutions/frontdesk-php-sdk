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
 * Class AppointmentAvailabilitySlot
 * @package NovakSolutions\FrontDesk\Model\Front
 * @property int $duration_in_minutes
 * @property string $start_at
 * @property string $end_at
 * @property string $date
 * @property string $location
 * @property int $location_id
 * @property string $staff_member
 */
class AppointmentAvailabilitySlot extends Model\CoreModel {
    public static $endPoints = array(
        'select' => array(
            'method' => 'GET',
            'urlPath' => '/api/v2/front/appointments/:service_id/available_slots'
        )
    );

    public static $fields = array(
        'duration_in_minutes',
        'start_at',
        'end_at',
        'date',
        'location',
        'location_id',
        'staff_member',
    );
}