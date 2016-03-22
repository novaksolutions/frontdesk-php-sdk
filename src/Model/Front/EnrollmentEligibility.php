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
 * Class EnrollmentEligibility
 * @package NovakSolutions\FrontDesk\Model\Front
 * @property integer $person_id
 * @property boolean $can_enroll
 * @property array $restrictions
 */
class EnrollmentEligibility extends Model\CoreModel {
    public static $endPoints = array(
        'select' => array(
            'method' => 'GET',
            'urlPath' => '/api/v2/front/event_occurrence/:event_occurrence_id/enrollment_eligibilities'
        )
    );

    public static $fields = array(
        'person_id',
        'can_enroll',
        'restrictions',
    );
}