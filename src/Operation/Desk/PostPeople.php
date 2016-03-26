<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 2/29/2016
 * Time: 2:48 PM
 */

namespace NovakSolutions\FrontDesk\Operation\Desk;
use NovakSolutions\FrontDesk\Operation;

/**
 * Class PostPeople
 * @package NovakSolutions\FrontDesk\Operation\Desk
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $email
 * @property string $address
 * @property string $phone
 * @property date $birthdate
 * @property string $guardian_name
 * @property string $guardian_email
 * @property integer $location_id
 * @property timestamp $joined_at
 * @property boolean $send_invite
 * @property boolean $skip_complimentary_passes
 * @property collection $custom_fields
 */
class PostPeople extends Operation\Operation {
    public static $method = 'POST';
    public static $urlPath = '/v2/desk/people';

    public static $fields = array(
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'address',
        'phone',
        'birthdate',
        'guardian_name',
        'guardian_email',
        'location_id',
        'joined_at',
        'send_invite',
        'skip_complimentary_passes',
        'custom_fields',
    );

    public static function post(, $data, $subdomain = null){
        $urlArguments = compact('');
        self::makeRequest($urlArguments, $data, $subdomain);
    }
}