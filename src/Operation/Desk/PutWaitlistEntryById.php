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
 * Class PutWaitlistEntryById
 * @package NovakSolutions\FrontDesk\Operation\Desk
 * @property integer $id
 * @property string $state_event
 */
class PutWaitlistEntryById extends Operation\Operation {
    public static $httpMethod = 'PUT';
    public static $urlPath = '/api/v2/desk/waitlist_entries/:id';
    public static $noSubdomain = false;
    public static $fields = array(
        'id',
        'state_event',
    );

    public static $parameters = array(
    );
}