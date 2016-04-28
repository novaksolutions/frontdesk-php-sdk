<?php
/**
 * Copyright 2016 (C) NovakSolutions, LLC
 */

namespace NovakSolutions\FrontDesk\Model\Desk;
use NovakSolutions\FrontDesk\Model;

/**
 * Class PackProduct
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
class PackProduct extends Model\CoreModel {
    public static $getByIdOperationClassName = '\NovakSolutions\FrontDesk\Operation\Desk\GetPackProductById';
    public static $putOperationClassName = '\NovakSolutions\FrontDesk\Operation\Desk\PutPackProductById';
    public static $postOperationClassName = '\NovakSolutions\FrontDesk\Operation\Desk\PostPackProduct';
    public static $deleteOperationClassName = '\NovakSolutions\FrontDesk\Operation\Desk\DeletePackProductById';
    public static $queryOperationClassName = '\NovakSolutions\FrontDesk\Operation\Desk\GetPackProducts';

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