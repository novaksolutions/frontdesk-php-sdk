<?php
/**
 * Copyright 2016 (C) NovakSolutions, LLC
 */

namespace NovakSolutions\FrontDesk\Model\Front;
use NovakSolutions\FrontDesk\Model;

/**
 * Class WaitlistEntry
 * @package NovakSolutions\FrontDesk\Model\Front
 * @property integer $id
 * @property integer $person_id
 * @property integer $event_occurrence_id
 * @property string $state
 */
class WaitlistEntry extends Model\CoreModel {
    public static $getByIdOperationClassName = '\NovakSolutions\FrontDesk\Operation\Front\GetWaitlistEntryById';
    public static $putOperationClassName = '';
    public static $postOperationClassName = '\NovakSolutions\FrontDesk\Operation\Front\PostWaitlistEntry';
    public static $deleteOperationClassName = '\NovakSolutions\FrontDesk\Operation\Front\DeleteWaitlistEntryById';
    public static $queryOperationClassName = '';

    public static $fields = array(
        'id',
        'person_id',
        'event_occurrence_id',
        'state',
    );
}