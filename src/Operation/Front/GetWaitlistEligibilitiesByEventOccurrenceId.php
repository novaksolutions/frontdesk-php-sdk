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
 * Class GetWaitlistEligibilitiesByEventOccurrenceId
 * @package NovakSolutions\FrontDesk\Operation\Front
 * @property integer $person_id
 * @property boolean $can_waitlist
 * @property array $restrictions
 */
class GetWaitlistEligibilitiesByEventOccurrenceId extends Operation\Operation {
    public static $httpMethod = 'GET';
    public static $urlPath = '/api/v2/front/event_occurrences/:event_occurrence_id/waitlist_eligibilities';
    public static $noSubdomain = false;
    public static $fields = array(
        'person_id',
        'can_waitlist',
        'restrictions',
    );

    public static $parameters = array(
    );
}