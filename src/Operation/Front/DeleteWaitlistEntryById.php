<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 2/29/2016
 * Time: 2:48 PM
 */

namespace NovakSolutions\FrontDesk\Operation\Front;
use NovakSolutions\FrontDesk\Operation;

/**
 * Class DeleteWaitlistEntryById
 * @package NovakSolutions\FrontDesk\Operation\Front
 */
class DeleteWaitlistEntryById extends Operation\Operation {
    public static $httpMethod = 'DELETE';
    public static $urlPath = '/api/v2/front/waitlist_entries/:id';
    public static $noSubdomain = false;
    public static $fields = array(
    );

    public static $parameters = array(
    );
}