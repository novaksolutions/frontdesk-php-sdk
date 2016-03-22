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
 * Class Busines
 * @package NovakSolutions\FrontDesk\Model\Front
 * @property int $id
 * @property string $name
 * @property string $subdomain
 * @property string $default_locale
 * @property string $currency_code
 * @property string $website
 * @property string $email_address
 * @property string $phone
 */
class Busines extends Model\CoreModel {
    public static $endPoints = array(
        'select' => array(
            'method' => 'GET',
            'urlPath' => '/api/v2/front/business'
        )
    );

    public static $fields = array(
        'id',
        'name',
        'subdomain',
        'default_locale',
        'currency_code',
        'website',
        'email_address',
        'phone',
    );
}