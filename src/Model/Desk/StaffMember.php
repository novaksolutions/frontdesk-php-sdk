<?php
/**
 * Copyright 2016 (C) NovakSolutions, LLC
 */

namespace NovakSolutions\FrontDesk\Model\Desk;
use NovakSolutions\FrontDesk\Model;

/**
 * Class StaffMember
 * @package NovakSolutions\FrontDesk\Model\Desk
 * @property int $id
 * @property string $name
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $phone
 * @property string $email
 * @property string $role
 * @property string $bio
 */
class StaffMember extends Model\CoreModel {
    public static $getByIdOperationClassName = '\NovakSolutions\FrontDesk\Operation\Desk\GetStaffMemberById';
    public static $putOperationClassName = '';
    public static $postOperationClassName = '';
    public static $deleteOperationClassName = '';
    public static $queryOperationClassName = '\NovakSolutions\FrontDesk\Operation\Desk\GetStaffMembers';

    public static $fields = array(
        'id',
        'name',
        'first_name',
        'middle_name',
        'last_name',
        'phone',
        'email',
        'role',
        'bio',
    );
}