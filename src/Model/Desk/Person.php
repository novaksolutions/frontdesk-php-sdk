<?php
/**
 * Copyright 2016 (C) NovakSolutions, LLC
 */

namespace NovakSolutions\FrontDesk\Model\Desk;
use NovakSolutions\FrontDesk\Model;

/**
 * Class Person
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
 * @property string $location_id
 * @property string $person_custom_fields
 */
class Person extends Model\CoreModel {
    public static $getByIdOperationClassName = '\NovakSolutions\FrontDesk\Operation\Desk\GetPersonById';
    public static $putOperationClassName = '\NovakSolutions\FrontDesk\Operation\Desk\PutPersonById';
    public static $postOperationClassName = '\NovakSolutions\FrontDesk\Operation\Desk\PostPerson';
    public static $deleteOperationClassName = '\NovakSolutions\FrontDesk\Operation\Desk\DeletePersonById';
    public static $queryOperationClassName = '\NovakSolutions\FrontDesk\Operation\Desk\GetPeople';

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
        'person_custom_fields',
    );
}