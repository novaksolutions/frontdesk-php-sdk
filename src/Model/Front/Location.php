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
 * Class Location
 * @package NovakSolutions\FrontDesk\Model\Front
 * @property int $id
 * @property string $name
 * @property string $address
 * @property int $latitude
 * @property int $longitude
 * @property string $phone
 * @property string $description
 * @property string $timezone_friendly
 * @property string $timezone
 */
class Location extends Model\CoreModel {
    public static $endPoints = array(
        'select' => array(
            'method' => 'GET',
            'urlPath' => '/api/v2/front/locations'
        )
    );

    public static $fields = array(
        'id',
        'name',
        'address',
        'latitude',
        'longitude',
        'phone',
        'description',
        'timezone_friendly',
        'timezone',
    );
}