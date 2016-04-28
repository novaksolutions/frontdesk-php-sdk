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
 * Class DeleteNoteById
 * @package NovakSolutions\FrontDesk\Operation\Desk
 */
class DeleteNoteById extends Operation\Operation {
    public static $httpMethod = 'DELETE';
    public static $urlPath = '/v2/desk/people/:person_id/notes/:id';
    public static $noSubdomain = false;
    public static $fields = array(
    );

    public static $parameters = array(
    );
}