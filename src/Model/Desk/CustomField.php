<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 2/29/2016
 * Time: 2:48 PM
 */

namespace NovakSolutions\FrontDesk\Model\Desk;
use NovakSolutions\FrontDesk\Model;

/**
 * Class CustomField
 * @package NovakSolutions\FrontDesk\Model\Desk
 * @property int $id
 * @property string $name
 * @property string $why
 * @property string $data_type
 * @property string $multi_select
 * @property string $custom_field_options
 * @property string $custom_field_settings
 */
class CustomField extends Model\CoreModel {
    public static $endPoints = array(
        'select' => array(
            'method' => 'GET',
            'urlPath' => '/api/v2/desk/custom_fields'
        )
    );

    public static $fields = array(
        'id',
        'name',
        'why',
        'data_type',
        'multi_select',
        'custom_field_options',
        'custom_field_settings',
    );
}