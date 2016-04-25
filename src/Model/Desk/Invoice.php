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
 * Class Invoice
 * @package NovakSolutions\FrontDesk\Model\Desk
 * @property currency $adjustments_amount
 * @property integer $business_id
 * @property string $business_name
 * @property string $business_subdomain
 * @property datetime $closed_at
 * @property date $closed_date
 * @property string $commission_recipient_name
 * @property currency $coupons_amount
 * @property boolean $created_by_client
 * @property string $created_by_name
 * @property string $currency_code
 * @property currency $discounts_amount
 * @property currency $expected_amount
 * @property currency $expected_revenue_amount
 * @property currency $expected_tax_amount
 * @property integer $failed_transactions
 * @property integer $franchise_id
 * @property currency $gross_amount
 * @property boolean $invoice_autobill
 * @property date $invoice_due_date
 * @property integer $invoice_id
 * @property string $invoice_number
 * @property string $invoice_payer_home_location
 * @property integer $invoice_payer_id
 * @property string $invoice_payer_name
 * @property string $invoice_payer_primary_staff_name_at_sale
 * @property enum $invoice_state
 * @property datetime $issued_at
 * @property date $issued_date
 * @property string $key
 * @property currency $net_paid_amount
 * @property currency $net_paid_revenue_amount
 * @property currency $net_paid_tax_amount
 * @property currency $outstanding_amount
 * @property currency $outstanding_revenue_amount
 * @property currency $outstanding_tax_amount
 * @property currency $payments_amount
 * @property integer $purchase_order_number
 * @property currency $refunds_amount
 * @property string $sale_location_name
 * @property integer $voided_transactions
 */
class Invoice extends Model\ReportingModel {
    public static $endPoints = array(
        'select' => array(
            'httpMethod' => 'POST',
            'urlPath' => '/desk/api/v3/reports/invoices/queries'
        )
    );

    public static $fields = array(
        'adjustments_amount',
        'business_id',
        'business_name',
        'business_subdomain',
        'closed_at',
        'closed_date',
        'commission_recipient_name',
        'coupons_amount',
        'created_by_client',
        'created_by_name',
        'currency_code',
        'discounts_amount',
        'expected_amount',
        'expected_revenue_amount',
        'expected_tax_amount',
        'failed_transactions',
        'franchise_id',
        'gross_amount',
        'invoice_autobill',
        'invoice_due_date',
        'invoice_id',
        'invoice_number',
        'invoice_payer_home_location',
        'invoice_payer_id',
        'invoice_payer_name',
        'invoice_payer_primary_staff_name_at_sale',
        'invoice_state',
        'issued_at',
        'issued_date',
        'key',
        'net_paid_amount',
        'net_paid_revenue_amount',
        'net_paid_tax_amount',
        'outstanding_amount',
        'outstanding_revenue_amount',
        'outstanding_tax_amount',
        'payments_amount',
        'purchase_order_number',
        'refunds_amount',
        'sale_location_name',
        'voided_transactions',
    );
}