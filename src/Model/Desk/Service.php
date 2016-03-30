<?php
/**
 * Copyright 2016 (C) NovakSolutions, LLC
 */

namespace NovakSolutions\FrontDesk\Model\Desk;
use NovakSolutions\FrontDesk\Model;

/**
 * Class Service
 * @package NovakSolutions\FrontDesk\Model\Desk
 * @property int $id
 * @property string $name
 * @property string $type
 * @property int $position
 * @property string $description
 * @property string $description_short
 * @property string $instructions
 * @property string $anonymous_staff
 * @property int $duration_in_minutes
 * @property int $snap_duration_in_minutes
 * @property int $setup_duration_in_minutes
 * @property int $cleanup_duration_in_minutes
 * @property int $enrollment_window_blackout_minutes
 * @property int $free_cancellation_window_in_hours
 * @property string $visitors_can_view
 * @property string $clients_can_view
 * @property string $clients_can_book
 * @property string $members_can_book
 * @property string $members_can_view
 * @property int $maximum_clients
 * @property string $show_capacity_to_clients
 * @property string $show_rooms_to_clients
 * @property string $hidden_at
 * @property string $allow_tips
 * @property string $require_cc
 * @property string $require_plan
 * @property string $no_merchandise_price
 * @property int $category_id
 * @property string $category_name
 * @property string $supports_single_payer
 * @property int $calendar_color
 * @property string $pricing
 */
class Service extends Model\CoreModel {
    public static $getByIdOperationClassName = '\NovakSolutions\FrontDesk\Operation\Desk\GetServiceById';
    public static $putOperationClassName = '';
    public static $postOperationClassName = '';
    public static $deleteOperationClassName = '';
    public static $queryOperationClassName = '\NovakSolutions\FrontDesk\Operation\Desk\GetServices';

    public static $fields = array(
        'id',
        'name',
        'type',
        'position',
        'description',
        'description_short',
        'instructions',
        'anonymous_staff',
        'duration_in_minutes',
        'snap_duration_in_minutes',
        'setup_duration_in_minutes',
        'cleanup_duration_in_minutes',
        'enrollment_window_blackout_minutes',
        'free_cancellation_window_in_hours',
        'visitors_can_view',
        'clients_can_view',
        'clients_can_book',
        'members_can_book',
        'members_can_view',
        'maximum_clients',
        'show_capacity_to_clients',
        'show_rooms_to_clients',
        'hidden_at',
        'allow_tips',
        'require_cc',
        'require_plan',
        'no_merchandise_price',
        'category_id',
        'category_name',
        'supports_single_payer',
        'calendar_color',
        'pricing',
    );
}