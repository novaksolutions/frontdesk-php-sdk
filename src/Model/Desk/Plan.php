<?php
/**
 * Copyright 2016 (C) NovakSolutions, LLC
 */

namespace NovakSolutions\FrontDesk\Model\Desk;
use NovakSolutions\FrontDesk\Model;

/**
 * Class Plan
 * @package NovakSolutions\FrontDesk\Model\Desk
 * @property int $id
 * @property int $count
 * @property string $type
 * @property string $person_ids
 * @property string $name
 * @property string $description
 * @property int $price_cents
 * @property string $consider_member
 * @property int $plan_product_id
 * @property string $start_date
 * @property string $end_date
 * @property string $staff_member_id
 * @property string $location_id
 * @property string $canceled_at
 * @property string $created_at
 * @property string $updated_at
 */
class Plan extends Model\CoreModel {
    public static $getByIdOperationClassName = '';
    public static $putOperationClassName = '';
    public static $postOperationClassName = '';
    public static $deleteOperationClassName = '';
    public static $queryOperationClassName = '';

    public static $fields = array(
        'id',
        'count',
        'type',
        'person_ids',
        'name',
        'description',
        'price_cents',
        'consider_member',
        'plan_product_id',
        'start_date',
        'end_date',
        'staff_member_id',
        'location_id',
        'canceled_at',
        'created_at',
        'updated_at',
    );
}