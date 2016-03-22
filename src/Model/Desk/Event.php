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
 * Class Event
 * @package NovakSolutions\FrontDesk\Model\Desk
 * @property int $id
 * @property string $name
 * @property int $service_id
 * @property string $start_time
 * @property string $end_time
 * @property string $created_at
 * @property string $updated_at
 */
class Event extends Model\CoreModel {
    public static $endPoints = array(
        'select' => array(
            'method' => 'GET',
            'urlPath' => '/api/v2/desk/events/:id'
        )
    );

    public static $fields = array(
        'id',
        'name',
        'service_id',
        'start_time',
        'end_time',
        'created_at',
        'updated_at',
    );
}