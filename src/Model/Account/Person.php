<?php
/**
 * Copyright 2016 (C) NovakSolutions, LLC
 */

namespace NovakSolutions\FrontDesk\Model\Account;
use NovakSolutions\FrontDesk\Model;

/**
 * Class Person
 * @package NovakSolutions\FrontDesk\Model\Account
 * @property int $id
 * @property string $name
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $email
 * @property string $address
 * @property string $secondary_info_field
 * @property string $birthdate
 * @property string $profile_photo
 * @property string $person_custom_fields
 * @property int $business_id
 * @property string $business_name
 * @property string $subdomain
 * @property string $role
 */
class Person extends Model\CoreModel {
    public static $getByIdOperationClassName = '';
    public static $putOperationClassName = '';
    public static $postOperationClassName = '';
    public static $deleteOperationClassName = '';
    public static $queryOperationClassName = '\NovakSolutions\FrontDesk\Operation\Account\GetPeople';

    public static $fields = array(
        'id',
        'name',
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'address',
        'secondary_info_field',
        'birthdate',
        'profile_photo',
        'person_custom_fields',
        'business_id',
        'business_name',
        'subdomain',
        'role',
    );
}