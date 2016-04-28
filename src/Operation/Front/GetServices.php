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
 * Class GetServices
 * @package NovakSolutions\FrontDesk\Operation\Front
 */
class GetServices extends Operation\Operation {
    public static $httpMethod = 'GET';
    public static $urlPath = '/api/v2/front/services';
    public static $noSubdomain = false;
    public static $fields = array(
    );

    public static $parameters = array(
    );
}