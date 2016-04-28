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
 * Class GetEventOccurrences
 * @package NovakSolutions\FrontDesk\Operation\Desk
 */
class GetEventOccurrences extends Operation\Operation {
    public static $httpMethod = 'GET';
    public static $urlPath = '/api/v2/desk/event_occurrences';
    public static $noSubdomain = false;

    const PARAM_FROM = 'from';
    const PARAM_TO = 'to';
    const PARAM_STATE = 'state';

    public static $fields = array(
    );

    public static $parameters = array(
        'from',
        'to',
        'state',
    );
}