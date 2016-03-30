<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 2/29/2016
 * Time: 2:48 PM
 */

namespace NovakSolutions\FrontDesk\Operation\Account;
use NovakSolutions\FrontDesk\Operation;

/**
 * Class GetPeople
 * @package NovakSolutions\FrontDesk\Operation\Account
 */
class GetPeople extends Operation\Operation {
    public static $httpMethod = 'GET';
    public static $urlPath = '/api/v2/account/people';
    public static $noSubdomain = true;
    public static $fields = array(
    );

    public static $parameters = array(
    );
}