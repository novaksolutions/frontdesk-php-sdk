<?php
/**
 * Copyright 2016 (C) NovakSolutions, LLC
 */

namespace NovakSolutions\FrontDesk\Model\Desk;
use NovakSolutions\FrontDesk\Model;

/**
 * Class Business
 * @package NovakSolutions\FrontDesk\Model\Desk
 * @property int $id
 * @property string $name
 * @property string $subdomain
 * @property string $default_locale
 * @property string $currency_code
 * @property string $website
 * @property string $email_address
 * @property string $phone
 * @property string $is_franchise
 */
class Business extends Model\CoreModel {
    public static $getByIdOperationClassName = '';
    public static $putOperationClassName = '';
    public static $postOperationClassName = '';
    public static $deleteOperationClassName = '';
    public static $queryOperationClassName = '\NovakSolutions\FrontDesk\Operation\Desk\GetBusiness';

    public static $fields = array(
        'id',
        'name',
        'subdomain',
        'default_locale',
        'currency_code',
        'website',
        'email_address',
        'phone',
        'is_franchise',
    );
}