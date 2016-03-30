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
 * Class GetAvailableSlotsByServiceId
 * @package NovakSolutions\FrontDesk\Operation\Desk
 */
class GetAvailableSlotsByServiceId extends Operation\Operation {
    public static $httpMethod = 'GET';
    public static $urlPath = '/api/v2/desk/appointments/:service_id/available_slots';
    public static $noSubdomain = false;

    const PARAM_DATE = 'date';
    const PARAM_STAFF_MEMBER_IDS = 'staff_member_ids';
    const PARAM_LOCATION_IDS = 'location_ids';

    public static $fields = array(
    );

    public static $parameters = array(
        'date',
        'staff_member_ids',
        'location_ids',
    );
}