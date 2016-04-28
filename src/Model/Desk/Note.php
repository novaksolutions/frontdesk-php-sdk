<?php
/**
 * Copyright 2016 (C) NovakSolutions, LLC
 */

namespace NovakSolutions\FrontDesk\Model\Desk;
use NovakSolutions\FrontDesk\Model;

/**
 * Class Note
 * @package NovakSolutions\FrontDesk\Model\Desk
 * @property int $id
 * @property string $note
 * @property string $public
 * @property string $pinned
 * @property int $person_id
 * @property string $created_at
 */
class Note extends Model\CoreModel {
    public static $getByIdOperationClassName = '\NovakSolutions\FrontDesk\Operation\Desk\GetNoteById';
    public static $putOperationClassName = '';
    public static $postOperationClassName = '';
    public static $deleteOperationClassName = '\NovakSolutions\FrontDesk\Operation\Desk\DeleteNoteById';
    public static $queryOperationClassName = '';

    public static $fields = array(
        'id',
        'note',
        'public',
        'pinned',
        'person_id',
        'created_at',
    );
}