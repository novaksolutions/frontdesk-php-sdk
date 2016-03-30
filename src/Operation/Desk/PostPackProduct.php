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
 * Class PostPackProduct
 * @package NovakSolutions\FrontDesk\Operation\Desk
 * @property object $product
 * @property integer $count
 * @property integer $commitment_length
 * @property string $commitment_unit
 * @property integer $location_id
 * @property boolean $consider_member
 * @property string $terms
 * @property boolean $terms_acceptance_required
 * @property string $terms_acceptance_type
 * @property boolean $terms_acceptance_at_checkout
 * @property boolean $send_expiration_notifications
 * @property array $service_ids
 */
class PostPackProduct extends Operation\Operation {
    public static $httpMethod = 'POST';
    public static $urlPath = '/api/v2/desk/pack_products';
    public static $noSubdomain = false;
    public static $fields = array(
        'product',
        'count',
        'commitment_length',
        'commitment_unit',
        'location_id',
        'consider_member',
        'terms',
        'terms_acceptance_required',
        'terms_acceptance_type',
        'terms_acceptance_at_checkout',
        'send_expiration_notifications',
        'service_ids',
    );

    public static $parameters = array(
    );
}