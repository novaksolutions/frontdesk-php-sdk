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
 * Class PacksPasse
 * @package NovakSolutions\FrontDesk\Model\Desk
 * @property int $id
 * @property int $count
 * @property string $person_ids
 * @property string $description
 * @property int $price_cents
 * @property string $rollover_count
 * @property int $pack_product_id
 * @property string $start_date
 * @property string $end_date
 * @property string $staff_member_id
 * @property string $location_id
 * @property string $created_at
 * @property string $updated_at
 */
class PacksPasse extends Model\CoreModel {
    public static $endPoints = array(
        'select' => array(
            'method' => 'GET',
            'urlPath' => '/api/v2/desk/packs/:id'
        )
    );

    public static $fields = array(
        'id',
        'count',
        'person_ids',
        'description',
        'price_cents',
        'rollover_count',
        'pack_product_id',
        'start_date',
        'end_date',
        'staff_member_id',
        'location_id',
        'created_at',
        'updated_at',
    );
}