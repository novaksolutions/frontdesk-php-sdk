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
 * Class GetMe
 * @package NovakSolutions\FrontDesk\Operation\Desk
 */
class GetMe extends Operation\Operation {
    public static $httpMethod = 'GET';
    public static $urlPath = '/api/v2/desk/people/me';
    public static $noSubdomain = false;
    public static $fields = array(
    );

    public static $parameters = array(
    );
}