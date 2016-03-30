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
 * Class PostVisit
 * @package NovakSolutions\FrontDesk\Operation\Front
 * @property integer $person_id
 * @property integer $event_occurrence_id
 */
class PostVisit extends Operation\Operation {
    public static $httpMethod = 'POST';
    public static $urlPath = '/api/v2/front/visits';
    public static $noSubdomain = false;
    public static $fields = array(
        'person_id',
        'event_occurrence_id',
    );

    public static $parameters = array(
    );
}