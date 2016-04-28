<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 2/29/2016
 * Time: 2:48 PM
 */

namespace NovakSolutions\FrontDesk\Model\Desk;
use NovakSolutions\FrontDesk\Model;

/**
 * Class EventOccurrenceStaffMember
 * @package NovakSolutions\FrontDesk\Model\Desk
 * @property string $address
 * @property boolean $attendance_completed
 * @property integer $business_id
 * @property string $business_name
 * @property string $business_subdomain
 * @property integer $capacity
 * @property integer $completed_enrollment_count
 * @property integer $completed_unpaid_count
 * @property string $currency_code
 * @property float $duration_in_hours
 * @property integer $duration_in_minutes
 * @property string $email
 * @property datetime $end_at
 * @property integer $enrollment_count
 * @property integer $event_id
 * @property integer $event_occurrence_id
 * @property integer $expired_enrollment_count
 * @property integer $franchise_id
 * @property string $full_name
 * @property integer $home_location_id
 * @property string $home_location_name
 * @property integer $is_waitlist_count
 * @property string $key
 * @property integer $late_canceled_enrollment_count
 * @property integer $noshowed_enrollment_count
 * @property integer $paid_count
 * @property integer $person_id
 * @property string $phone
 * @property integer $registered_enrollment_count
 * @property integer $removed_enrollment_count
 * @property integer $reserved_enrollment_count
 * @property enum $role
 * @property string $service_category
 * @property date $service_date
 * @property enum $service_day
 * @property integer $service_id
 * @property integer $service_location_id
 * @property string $service_location_name
 * @property string $service_name
 * @property enum $service_state
 * @property time $service_time
 * @property enum $service_type
 * @property datetime $start_at
 * @property integer $visit_count
 * @property integer $waiting_enrollment_count
 * @property integer $waitlist_to_visit_count
 */
class EventOccurrenceStaffMember extends Model\ReportingModel {
    public static $endPoints = array(
        'select' => array(
            'httpMethod' => 'POST',
            'urlPath' => '/desk/api/v3/reports/event_occurrence_staff_members/queries'
        )
    );

    public static $fields = array(
        'address',
        'attendance_completed',
        'business_id',
        'business_name',
        'business_subdomain',
        'capacity',
        'completed_enrollment_count',
        'completed_unpaid_count',
        'currency_code',
        'duration_in_hours',
        'duration_in_minutes',
        'email',
        'end_at',
        'enrollment_count',
        'event_id',
        'event_occurrence_id',
        'expired_enrollment_count',
        'franchise_id',
        'full_name',
        'home_location_id',
        'home_location_name',
        'is_waitlist_count',
        'key',
        'late_canceled_enrollment_count',
        'noshowed_enrollment_count',
        'paid_count',
        'person_id',
        'phone',
        'registered_enrollment_count',
        'removed_enrollment_count',
        'reserved_enrollment_count',
        'role',
        'service_category',
        'service_date',
        'service_day',
        'service_id',
        'service_location_id',
        'service_location_name',
        'service_name',
        'service_state',
        'service_time',
        'service_type',
        'start_at',
        'visit_count',
        'waiting_enrollment_count',
        'waitlist_to_visit_count',
    );
}