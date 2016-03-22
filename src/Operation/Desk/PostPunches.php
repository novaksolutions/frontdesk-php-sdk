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
 * Class PostPunches
 * @package NovakSolutions\FrontDesk\Operation\Desk
 * @property integer $visit_id
 * @property integer $plan_id
 */
class PostPunches extends Operation\Operation {
    public static $endPoint = array(
        'method' => 'POST',
        'urlPath' => '/api/v2/desk/punches'
    );

    public static $fields = array(
        'visit_id',
        'plan_id',
    );
}