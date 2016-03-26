<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 2/29/2016
 * Time: 2:48 PM
 */

namespace NovakSolutions\FrontDesk\Operation\Desk;
use NovakSolutions\FrontDesk\Operation;

/**
 * Class PostNotesByPersonId
 * @package NovakSolutions\FrontDesk\Operation\Desk
 * @property string $note
 * @property boolean $public
 * @property boolean $pinned
 */
class PostNotesByPersonId extends Operation\Operation {
    public static $method = 'POST';
    public static $urlPath = '/v2/desk/people/:person_id/notes';

    public static $fields = array(
        'note',
        'public',
        'pinned',
    );

    public static function post($person_id, $data, $subdomain = null){
        $urlArguments = compact('person_id');
        self::makeRequest($urlArguments, $data, $subdomain);
    }
}