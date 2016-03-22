<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 2/29/2016
 * Time: 2:48 PM
 */

namespace NovakSolutions\FrontDesk\Model\Desk;
use NovakSolutions\FrontDesk\Model;

/**
 * Class NotesforPeople
 * @package NovakSolutions\FrontDesk\Model\Desk
 * @property int $id
 * @property string $note
 * @property string $public
 * @property string $pinned
 * @property int $person_id
 * @property string $created_at
 */
class NotesforPeople extends Model\CoreModel {
    public static $endPoints = array(
        'select' => array(
            'method' => 'GET',
            'urlPath' => '/api/v2/desk/people/:person_id/notes'
        )
    );

    public static $fields = array(
        'id',
        'note',
        'public',
        'pinned',
        'person_id',
        'created_at',
    );
}