<?php
/**
 * Copyright 2016 (C) NovakSolutions, LLC
 */

namespace NovakSolutions\FrontDesk\Model\Desk;
use NovakSolutions\FrontDesk\Model;

/**
 * Class Location
 * @package NovakSolutions\FrontDesk\Model\Desk
 * @property int $id
 * @property string $name
 * @property string $address
 * @property int $latitude
 * @property int $longitude
 * @property string $phone
 * @property string $description
 * @property string $show_in_client_mode
 * @property string $slug
 * @property string $timezone_friendly
 * @property string $timezone
 */
class Location extends Model\CoreModel {
    public static $getByIdOperationClassName = '\NovakSolutions\FrontDesk\Operation\Desk\GetLocationById';
    public static $putOperationClassName = '';
    public static $postOperationClassName = '';
    public static $deleteOperationClassName = '';
    public static $queryOperationClassName = '\NovakSolutions\FrontDesk\Operation\Desk\GetLocations';

    public static $fields = array(
        'id',
        'name',
        'address',
        'latitude',
        'longitude',
        'phone',
        'description',
        'show_in_client_mode',
        'slug',
        'timezone_friendly',
        'timezone',
    );
}