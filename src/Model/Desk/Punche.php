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
 * Class Punche
 * @package NovakSolutions\FrontDesk\Model\Desk
 * @property int $id
 * @property int $visit_id
 * @property int $plan_id
 * @property string $created_at
 */
class Punche extends Model\CoreModel {
    public static $endPoints = array(
        'select' => array(
            'method' => 'GET',
            'urlPath' => '/api/v2/desk/punches/:id'
        )
    );

    public static $fields = array(
        'id',
        'visit_id',
        'plan_id',
        'created_at',
    );
}