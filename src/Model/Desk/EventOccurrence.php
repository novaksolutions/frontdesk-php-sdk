<?php
/**
 * Copyright 2016 (C) NovakSolutions, LLC
 */

namespace NovakSolutions\FrontDesk\Model\Desk;
use NovakSolutions\FrontDesk\Model;

/**
 * Class EventOccurrence
 * @package NovakSolutions\FrontDesk\Model\Desk
 * @property int $id
 * @property int $event_id
 * @property string $name
 * @property string $description
 * @property int $service_id
 * @property int $location_id
 * @property string $updating
 * @property string $start_at
 * @property string $end_at
 * @property string $timezone
 * @property string $attendance_complete
 * @property string $state
 * @property string $full
 * @property int $visits_count
 * @property int $capacity_remaining
 * @property string $staff_members
 * @property string $people
 * @property string $visits
 */
class EventOccurrence extends Model\CoreModel {
    public static $getByIdOperationClassName = '\NovakSolutions\FrontDesk\Operation\Desk\GetEventOccurrenceById';
    public static $putOperationClassName = '';
    public static $postOperationClassName = '';
    public static $deleteOperationClassName = '';
    public static $queryOperationClassName = '\NovakSolutions\FrontDesk\Operation\Desk\GetEventOccurrences';

    public static $fields = array(
        'id',
        'event_id',
        'name',
        'description',
        'service_id',
        'location_id',
        'updating',
        'start_at',
        'end_at',
        'timezone',
        'attendance_complete',
        'state',
        'full',
        'visits_count',
        'capacity_remaining',
        'staff_members',
        'people',
        'visits',
    );
}