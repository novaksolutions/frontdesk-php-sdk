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
 * Class GetVisitsByPersonId
 * @package NovakSolutions\FrontDesk\Operation\Front
 */
class GetVisitsByPersonId extends Operation\Operation {
    public static $httpMethod = 'GET';
    public static $urlPath = '/api/v2/front/people/:person_id/visits';
    public static $noSubdomain = false;
    public static $fields = array(
    );

    public static $parameters = array(
    );
}