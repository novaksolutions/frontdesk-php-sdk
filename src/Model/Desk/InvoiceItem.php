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
 * Class InvoiceItem
 * @package NovakSolutions\FrontDesk\Model\Desk
 * @property currency $adjustments_amount
 * @property integer $business_id
 * @property string $business_name
 * @property string $business_subdomain
 * @property datetime $closed_at
 * @property date $closed_date
 * @property string $commission_recipient_name
 * @property string $coupon_code
 * @property currency $coupons_amount
 * @property boolean $created_by_client
 * @property string $created_by_name
 * @property string $currency_code
 * @property enum $discount_type
 * @property currency $discounts_amount
 * @property currency $expected_amount
 * @property currency $expected_revenue_amount
 * @property currency $expected_tax_amount
 * @property integer $failed_transactions
 * @property integer $franchise_id
 * @property boolean $grants_membership
 * @property currency $gross_amount
 * @property boolean $invoice_autobill
 * @property date $invoice_due_date
 * @property integer $invoice_id
 * @property integer $invoice_item_id
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
 * @property integer $plan_id
 * @property integer $product_id
 * @property string $product_name
 * @property string $product_name_at_sale
 * @property enum $product_type
 * @property integer $purchase_order_number
 * @property string $recipient_names
 * @property currency $refunds_amount
 * @property string $retail_add_ons
 * @property string $retail_options
 * @property string $revenue_category
 * @property string $sale_location_name
 * @property string $tax_types
 * @property string $tax_types_extended
 * @property integer $voided_transactions
 */
class InvoiceItem extends Model\ReportingModel {
    public static $endPoints = array(
        'select' => array(
            'httpMethod' => 'POST',
            'urlPath' => '/desk/api/v3/reports/invoice_items/queries'
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
        'coupon_code',
        'coupons_amount',
        'created_by_client',
        'created_by_name',
        'currency_code',
        'discount_type',
        'discounts_amount',
        'expected_amount',
        'expected_revenue_amount',
        'expected_tax_amount',
        'failed_transactions',
        'franchise_id',
        'grants_membership',
        'gross_amount',
        'invoice_autobill',
        'invoice_due_date',
        'invoice_id',
        'invoice_item_id',
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
        'plan_id',
        'product_id',
        'product_name',
        'product_name_at_sale',
        'product_type',
        'purchase_order_number',
        'recipient_names',
        'refunds_amount',
        'retail_add_ons',
        'retail_options',
        'revenue_category',
        'sale_location_name',
        'tax_types',
        'tax_types_extended',
        'voided_transactions',
    );
}