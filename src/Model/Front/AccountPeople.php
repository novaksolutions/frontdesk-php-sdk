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
 * Class AccountPeople
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
 * @property int $business_id
 * @property string $business_name
 * @property string $subdomain
 * @property string $role
 */
class AccountPeople extends Model\CoreModel {
    public static $endPoints = array(
        'select' => array(
            'method' => 'GET',
            'urlPath' => '/api/v2/account/people'
        )
    );

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