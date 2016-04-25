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
 * Class Enrollment
 * @package NovakSolutions\FrontDesk\Model\Desk
 * @property string $account_manager_emails
 * @property string $account_manager_names
 * @property string $account_manager_phones
 * @property string $address
 * @property string $available_plans
 * @property date $birthdate
 * @property integer $business_id
 * @property string $business_name
 * @property string $business_subdomain
 * @property datetime $cancelled_at
 * @property boolean $client_booked
 * @property datetime $completed_at
 * @property boolean $consider_member
 * @property string $currency_code
 * @property integer $duration_in_minutes
 * @property string $email
 * @property datetime $end_at
 * @property currency $estimated_amount
 * @property integer $event_id
 * @property integer $event_occurrence_id
 * @property boolean $first_visit
 * @property integer $franchise_id
 * @property string $full_name
 * @property string $home_location_name
 * @property string $instructor_names
 * @property boolean $is_paid
 * @property boolean $is_rollover
 * @property boolean $is_waitlist
 * @property string $key
 * @property datetime $noshow_at
 * @property string $paid_with
 * @property integer $person_id
 * @property string $phone
 * @property integer $plan_id
 * @property integer $plan_product_id
 * @property string $primary_staff_name
 * @property integer $punch_id
 * @property integer $punchcard_id
 * @property datetime $registered_at
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
 * @property enum $state
 * @property integer $visit_id
 * @property integer $waitlist_id
 * @property datetime $waitlisted_at
 */
class Enrollment extends Model\ReportingModel {
    public static $endPoints = array(
        'select' => array(
            'httpMethod' => 'POST',
            'urlPath' => '/desk/api/v3/reports/enrollments/queries'
        )
    );

    public static $fields = array(
        'account_manager_emails',
        'account_manager_names',
        'account_manager_phones',
        'address',
        'available_plans',
        'birthdate',
        'business_id',
        'business_name',
        'business_subdomain',
        'cancelled_at',
        'client_booked',
        'completed_at',
        'consider_member',
        'currency_code',
        'duration_in_minutes',
        'email',
        'end_at',
        'estimated_amount',
        'event_id',
        'event_occurrence_id',
        'first_visit',
        'franchise_id',
        'full_name',
        'home_location_name',
        'instructor_names',
        'is_paid',
        'is_rollover',
        'is_waitlist',
        'key',
        'noshow_at',
        'paid_with',
        'person_id',
        'phone',
        'plan_id',
        'plan_product_id',
        'primary_staff_name',
        'punch_id',
        'punchcard_id',
        'registered_at',
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
        'state',
        'visit_id',
        'waitlist_id',
        'waitlisted_at',
    );
}