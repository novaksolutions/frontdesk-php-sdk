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
 * Class PostPacksByPackProductId
 * @package NovakSolutions\FrontDesk\Operation\Desk
 * @property array $person_ids
 * @property date $start_date
 * @property date $end_date
 * @property integer $count
 * @property string $description
 * @property integer $price_cents
 * @property integer $staff_member_id
 * @property integer $location_id
 * @property integer $visits_shared
 */
class PostPacksByPackProductId extends Operation\Operation {
    public static $endPoint = array(
        'method' => 'POST',
        'urlPath' => '/api/v2/desk/pack_products/:pack_product_id/packs'
    );

    public static $fields = array(
        'person_ids',
        'start_date',
        'end_date',
        'count',
        'description',
        'price_cents',
        'staff_member_id',
        'location_id',
        'visits_shared',
    );
}