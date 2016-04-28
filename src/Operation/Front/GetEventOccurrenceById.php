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
 * Class GetEventOccurrenceById
 * @package NovakSolutions\FrontDesk\Operation\Front
 */
class GetEventOccurrenceById extends Operation\Operation {
    public static $endPoint = array(
        'method' => 'GET',
        'urlPath' => '/api/v2/front/event_occurrences/:id'
    );

    public static $fields = array(
    );
}