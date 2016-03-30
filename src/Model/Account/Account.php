<?php
/**
 * Copyright 2016 (C) NovakSolutions, LLC
 */

namespace NovakSolutions\FrontDesk\Model\Account;
use NovakSolutions\FrontDesk\Model;

/**
 * Class Account
 * @package NovakSolutions\FrontDesk\Model\Account
 * @property integer $id
 * @property string $email
 * @property string $first_name
 * @property string $last_name
 * @property timestamp $email_confirmed_at
 */
class Account extends Model\CoreModel {
    public static $getByIdOperationClassName = '';
    public static $putOperationClassName = '';
    public static $postOperationClassName = '';
    public static $deleteOperationClassName = '';
    public static $queryOperationClassName = '\NovakSolutions\FrontDesk\Operation\Account\GetAccount';

    public static $fields = array(
        'id',
        'email',
        'first_name',
        'last_name',
        'email_confirmed_at',
    );
}