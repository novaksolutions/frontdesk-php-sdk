<?php
/**
 * Copyright 2016 (C) NovakSolutions, LLC
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
    public static $getByIdOperationClassName = '';
    public static $putOperationClassName = '';
    public static $postOperationClassName = '';
    public static $deleteOperationClassName = '';
    public static $queryOperationClassName = '\NovakSolutions\FrontDesk\Operation\Desk\GetCustomFields';

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