<?php
/**
 * Copyright 2016 (C) NovakSolutions, LLC
 */

namespace NovakSolutions\FrontDesk\Model\Front;
use NovakSolutions\FrontDesk\Model;

/**
 * Class AvailableSlot
 * @package NovakSolutions\FrontDesk\Model\Front
 * @property int $duration_in_minutes
 * @property string $start_at
 * @property string $end_at
 * @property string $date
 * @property string $location
 * @property int $location_id
 * @property string $staff_member
 */
class AvailableSlot extends Model\CoreModel {
    public static $getByIdOperationClassName = '';
    public static $putOperationClassName = '';
    public static $postOperationClassName = '';
    public static $deleteOperationClassName = '';
    public static $queryOperationClassName = '';

    public static $fields = array(
        'duration_in_minutes',
        'start_at',
        'end_at',
        'date',
        'location',
        'location_id',
        'staff_member',
    );
}