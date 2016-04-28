<?php
/**
 * Copyright 2016 (C) NovakSolutions, LLC
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
    public static $getByIdOperationClassName = '\NovakSolutions\FrontDesk\Operation\Desk\GetRevenueCategoryById';
    public static $putOperationClassName = '';
    public static $postOperationClassName = '';
    public static $deleteOperationClassName = '';
    public static $queryOperationClassName = '\NovakSolutions\FrontDesk\Operation\Desk\GetRevenueCategories';

    public static $fields = array(
        'id',
        'name',
    );
}