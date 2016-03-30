<?php
/**
 * Copyright 2016 (C) NovakSolutions, LLC
 */

namespace NovakSolutions\FrontDesk\Model\Desk;
use NovakSolutions\FrontDesk\Model;

/**
 * Class Visit
 * @package NovakSolutions\FrontDesk\Model\Desk
 * @property integer $person_id
 * @property string $state
 * @property integer $event_occurrence_id
 * @property timestamp $registered_at
 * @property timestamp $completed_at
 * @property timestamp $noshow_at
 * @property timestamp $cancelled_at
 * @property timestamp $created_at
 * @property boolean $paid
 * @property string $paid_for_by
 * @property integer $punch_id
 */
class Visit extends Model\CoreModel {
    public static $getByIdOperationClassName = '\NovakSolutions\FrontDesk\Operation\Desk\GetVisitById';
    public static $putOperationClassName = '\NovakSolutions\FrontDesk\Operation\Desk\PutVisitById';
    public static $postOperationClassName = '\NovakSolutions\FrontDesk\Operation\Desk\PostVisit';
    public static $deleteOperationClassName = '\NovakSolutions\FrontDesk\Operation\Desk\DeleteVisitById';
    public static $queryOperationClassName = '';

    public static $fields = array(
        'person_id',
        'state',
        'event_occurrence_id',
        'registered_at',
        'completed_at',
        'noshow_at',
        'cancelled_at',
        'created_at',
        'paid',
        'paid_for_by',
        'punch_id',
    );
}