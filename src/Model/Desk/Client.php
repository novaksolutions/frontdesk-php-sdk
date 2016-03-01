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
 * Class Client
 * @package NovakSolutions\FrontDesk\Model\Desk
 */
class Client extends Model\ReportingModel{
    public static $endPoints = array(
        'select' => array(
            'method' => 'POST',
            'urlPath' => '/desk/api/v3/reports/clients/queries'
        )
    );

    public static $fields = array(
        'account_claim_date',
        'age',
        'address',
        'business_id',
        'business_name',
        'business_subdomain',
        'email',
        'full_name'
    );
} 