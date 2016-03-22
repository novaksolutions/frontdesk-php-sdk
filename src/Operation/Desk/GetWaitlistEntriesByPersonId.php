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
 * Class GetWaitlistEntriesByPersonId
 * @package NovakSolutions\FrontDesk\Operation\Desk
 */
class GetWaitlistEntriesByPersonId extends Operation\Operation {
    public static $endPoint = array(
        'method' => 'GET',
        'urlPath' => '/api/v2/desk/people/:person_id/waitlist_entries'
    );

    public static $fields = array(
    );
}