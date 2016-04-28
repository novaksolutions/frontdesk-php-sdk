<?php
/**
 * Copyright 2016 (C) NovakSolutions, LLC
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
    public static $getByIdOperationClassName = '\NovakSolutions\FrontDesk\Operation\Front\GetLocationById';
    public static $putOperationClassName = '';
    public static $postOperationClassName = '';
    public static $deleteOperationClassName = '';
    public static $queryOperationClassName = '\NovakSolutions\FrontDesk\Operation\Front\GetLocations';

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