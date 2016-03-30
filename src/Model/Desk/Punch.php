<?php
/**
 * Copyright 2016 (C) NovakSolutions, LLC
 */

namespace NovakSolutions\FrontDesk\Model\Desk;
use NovakSolutions\FrontDesk\Model;

/**
 * Class Punch
 * @package NovakSolutions\FrontDesk\Model\Desk
 * @property int $id
 * @property int $visit_id
 * @property int $plan_id
 * @property string $created_at
 */
class Punch extends Model\CoreModel {
    public static $getByIdOperationClassName = '\NovakSolutions\FrontDesk\Operation\Desk\GetPunchById';
    public static $putOperationClassName = '';
    public static $postOperationClassName = '\NovakSolutions\FrontDesk\Operation\Desk\PostPunch';
    public static $deleteOperationClassName = '\NovakSolutions\FrontDesk\Operation\Desk\DeletePunchById';
    public static $queryOperationClassName = '';

    public static $fields = array(
        'id',
        'visit_id',
        'plan_id',
        'created_at',
    );
}