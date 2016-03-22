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
 * Class PackproductPasse
 * @package NovakSolutions\FrontDesk\Model\Desk
 * @property int $id
 * @property int $count
 * @property int $commitment_length
 * @property string $commitment_unit
 * @property string $location_id
 * @property string $terms
 * @property string $send_expiration_notifications
 * @property string $created_at
 * @property string $updated_at
 * @property string $product
 * @property string $services
 */
class PackproductPasse extends Model\CoreModel {
    public static $endPoints = array(
        'select' => array(
            'method' => 'GET',
            'urlPath' => '/api/v2/desk/pack_products'
        )
    );

    public static $fields = array(
        'id',
        'count',
        'commitment_length',
        'commitment_unit',
        'location_id',
        'terms',
        'send_expiration_notifications',
        'created_at',
        'updated_at',
        'product',
        'services',
    );
}