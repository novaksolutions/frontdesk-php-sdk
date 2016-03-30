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
 * Class GetPeople
 * @package NovakSolutions\FrontDesk\Operation\Desk
 */
class GetPeople extends Operation\Operation {
    public static $httpMethod = 'GET';
    public static $urlPath = '/api/v2/desk/people';
    public static $noSubdomain = false;

    const PARAM_CREATED_SINCE = 'created_since';
    const PARAM_UPDATED_SINCE = 'updated_since';
    const PARAM_SORT = 'sort';

    public static $fields = array(
    );

    public static $parameters = array(
        'created_since',
        'updated_since',
        'sort',
    );
}