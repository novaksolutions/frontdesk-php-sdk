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
 * Class GetSalesTaxes
 * @package NovakSolutions\FrontDesk\Operation\Desk
 */
class GetSalesTaxes extends Operation\Operation {
    public static $endPoint = array(
        'method' => 'GET',
        'urlPath' => '/api/v2/desk/sales_taxes'
    );

    public static $fields = array(
    );
}