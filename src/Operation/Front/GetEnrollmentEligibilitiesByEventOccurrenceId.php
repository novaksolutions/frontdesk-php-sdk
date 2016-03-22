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
 * Class GetEnrollmentEligibilitiesByEventOccurrenceId
 * @package NovakSolutions\FrontDesk\Operation\Front
 * @property integer $person_id
 * @property boolean $can_enroll
 * @property array $restrictions
 */
class GetEnrollmentEligibilitiesByEventOccurrenceId extends Operation\Operation {
    public static $endPoint = array(
        'method' => 'GET',
        'urlPath' => '/api/v2/front/event_occurrence/:event_occurrence_id/enrollment_eligibilities'
    );

    public static $fields = array(
        'person_id',
        'can_enroll',
        'restrictions',
    );
}