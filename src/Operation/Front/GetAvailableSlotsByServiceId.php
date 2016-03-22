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
 * Class GetAvailableSlotsByServiceId
 * @package NovakSolutions\FrontDesk\Operation\Front
 */
class GetAvailableSlotsByServiceId extends Operation\Operation {
    public static $endPoint = array(
        'method' => 'GET',
        'urlPath' => '/api/v2/front/appointments/:service_id/available_slots'
    );

    public static $fields = array(
    );
}