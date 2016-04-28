<?php
/**
 * Copyright 2016 (C) NovakSolutions, LLC
 */

namespace NovakSolutions\FrontDesk\Model\Desk;
use NovakSolutions\FrontDesk\Model;

/**
 * Class WaitlistEntry
 * @package NovakSolutions\FrontDesk\Model\Desk
 * @property integer $id
 * @property integer $person_id
 * @property integer $event_occurrence_id
 * @property string $state
 * @property timestamp $created_at
 * @property timestamp $updated_at
 */
class WaitlistEntry extends Model\CoreModel {
    public static $getByIdOperationClassName = '\NovakSolutions\FrontDesk\Operation\Desk\GetWaitlistEntryById';
    public static $putOperationClassName = '\NovakSolutions\FrontDesk\Operation\Desk\PutWaitlistEntryById';
    public static $postOperationClassName = '\NovakSolutions\FrontDesk\Operation\Desk\PostWaitlistEntry';
    public static $deleteOperationClassName = '\NovakSolutions\FrontDesk\Operation\Desk\DeleteWaitlistEntryById';
    public static $queryOperationClassName = '';

    public static $fields = array(
        'id',
        'person_id',
        'event_occurrence_id',
        'state',
        'created_at',
        'updated_at',
    );
}