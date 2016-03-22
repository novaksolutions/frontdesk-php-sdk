<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 2/29/2016
 * Time: 2:48 PM
 */

namespace NovakSolutions\FrontDesk\Model\Front;
use NovakSolutions\FrontDesk\Model;

/**
 * Class Account
 * @package NovakSolutions\FrontDesk\Model\Front
 * @property integer $id
 * @property string $email
 * @property string $first_name
 * @property string $last_name
 * @property timestamp $email_confirmed_at
 */
class Account extends Model\CoreModel {
    public static $endPoints = array(
        'select' => array(
            'method' => 'GET',
            'urlPath' => '/api/v2/account'
        )
    );

    public static $fields = array(
        'id',
        'email',
        'first_name',
        'last_name',
        'email_confirmed_at',
    );
}