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
 * Class PostVisits
 * @package NovakSolutions\FrontDesk\Operation\Desk
 * @property integer $person_id
 * @property integer $event_occurrence_id
 * @property string $state
 * @property boolean $notify_client
 * @property array $restrictions
 */
class PostVisits extends Operation\Operation {
    public static $endPoint = array(
        'method' => 'POST',
        'urlPath' => '/api/v2/desk/visits'
    );

    public static $fields = array(
        'person_id',
        'event_occurrence_id',
        'state',
        'notify_client',
        'restrictions',
    );
}