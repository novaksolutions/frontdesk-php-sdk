<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 2/29/2016
 * Time: 2:48 PM
 */

namespace NovakSolutions\FrontDesk\Operation;
use NovakSolutions\FrontDesk\Operation;

/**
 * Class GetAccount
 * @package NovakSolutions\FrontDesk\Operation
 * @property integer $id
 * @property string $email
 * @property string $first_name
 * @property string $last_name
 * @property timestamp $email_confirmed_at
 */
class GetAccount extends Operation\Operation {
    public static $method = 'GET';
    public static $urlPath = '/api/v2/account';

    public static $fields = array(
        'id',
        'email',
        'first_name',
        'last_name',
        'email_confirmed_at',
    );

    public static function get($subdomain = null){
        $urlArguments = compact('');
        self::makeRequest($urlArguments, null, $subdomain);
    }
}