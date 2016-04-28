<?php
/**
 * Copyright 2016 (C) NovakSolutions, LLC
 */

namespace NovakSolutions\FrontDesk\Model\Desk;
use NovakSolutions\FrontDesk\Model;

/**
 * Class Me
 * @package NovakSolutions\FrontDesk\Model\Desk
 * @property int $id
 * @property string $name
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $membership
 * @property string $email
 * @property string $secondary_info_field
 * @property string $hidden_at
 * @property int $business_id
 * @property string $updated_at
 * @property string $birthdate
 * @property int $location_id
 * @property string $profile_photo
 * @property string $person_custom_fields
 */
class Me extends Model\CoreModel {
    public static $getByIdOperationClassName = '';
    public static $putOperationClassName = '';
    public static $postOperationClassName = '';
    public static $deleteOperationClassName = '';
    public static $queryOperationClassName = '\NovakSolutions\FrontDesk\Operation\Desk\GetMe';

    public static $fields = array(
        'id',
        'name',
        'first_name',
        'middle_name',
        'last_name',
        'membership',
        'email',
        'secondary_info_field',
        'hidden_at',
        'business_id',
        'updated_at',
        'birthdate',
        'location_id',
        'profile_photo',
        'person_custom_fields',
    );
}