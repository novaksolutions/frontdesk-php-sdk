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
 * Class RevenueCategory
 * @package NovakSolutions\FrontDesk\Model\Desk
 * @property int $id
 * @property string $name
 */
class RevenueCategory extends Model\CoreModel {
    public static $endPoints = array(
        'select' => array(
            'method' => 'GET',
            'urlPath' => '/api/v2/desk/revenue_categories'
        )
    );

    public static $fields = array(
        'id',
        'name',
    );
}