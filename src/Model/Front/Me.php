<?php
/**
 * Copyright 2016 (C) NovakSolutions, LLC
 */

namespace NovakSolutions\FrontDesk\Model\Front;
use NovakSolutions\FrontDesk\Model;

/**
 * Class Me
 * @package NovakSolutions\FrontDesk\Model\Front
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
 */
class Me extends Model\CoreModel {
    public static $getByIdOperationClassName = '';
    public static $putOperationClassName = '';
    public static $postOperationClassName = '';
    public static $deleteOperationClassName = '';
    public static $queryOperationClassName = '\NovakSolutions\FrontDesk\Operation\Front\GetMe';

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
    );
}