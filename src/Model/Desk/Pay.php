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
 * Class Pay
 * @package NovakSolutions\FrontDesk\Model\Desk
 * @property currency $base_pay_amount
 * @property integer $business_id
 * @property string $business_name
 * @property string $business_subdomain
 * @property string $currency_code
 * @property currency $final_pay_amount
 * @property integer $franchise_id
 * @property string $key
 * @property string $pay_description
 * @property integer $pay_id
 * @property range $pay_period
 * @property date $pay_period_end_date
 * @property date $pay_period_start_date
 * @property datetime $pay_recorded_at
 * @property datetime $pay_reviewed_at
 * @property integer $pay_reviewed_by_id
 * @property string $pay_reviewed_by_name
 * @property date $pay_reviewed_date
 * @property enum $pay_state
 * @property enum $pay_type
 * @property currency $per_head_pay_amount
 * @property string $service_category
 * @property date $service_date
 * @property float $service_hours
 * @property integer $service_id
 * @property string $service_location_name
 * @property string $service_name
 * @property enum $service_type
 * @property string $staff_home_location_name
 * @property integer $staff_id
 * @property string $staff_name
 * @property currency $tiered_pay_amount
 */
class Pay extends Model\ReportingModel {
    public static $endPoints = array(
        'select' => array(
            'httpMethod' => 'POST',
            'urlPath' => '/desk/api/v3/reports/pays/queries'
        )
    );

    public static $fields = array(
        'base_pay_amount',
        'business_id',
        'business_name',
        'business_subdomain',
        'currency_code',
        'final_pay_amount',
        'franchise_id',
        'key',
        'pay_description',
        'pay_id',
        'pay_period',
        'pay_period_end_date',
        'pay_period_start_date',
        'pay_recorded_at',
        'pay_reviewed_at',
        'pay_reviewed_by_id',
        'pay_reviewed_by_name',
        'pay_reviewed_date',
        'pay_state',
        'pay_type',
        'per_head_pay_amount',
        'service_category',
        'service_date',
        'service_hours',
        'service_id',
        'service_location_name',
        'service_name',
        'service_type',
        'staff_home_location_name',
        'staff_id',
        'staff_name',
        'tiered_pay_amount',
    );
}