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
 * Class Transaction
 * @package NovakSolutions\FrontDesk\Model\Desk
 * @property integer $business_id
 * @property string $business_name
 * @property string $business_subdomain
 * @property string $commission_recipient_name
 * @property string $created_by_name
 * @property enum $credit_card_name
 * @property string $currency_code
 * @property string $error_message
 * @property string $external_payment_name
 * @property datetime $failed_at
 * @property date $failed_date
 * @property integer $franchise_id
 * @property boolean $invoice_autobill
 * @property date $invoice_due_date
 * @property integer $invoice_id
 * @property string $invoice_number
 * @property string $invoice_payer_home_location
 * @property integer $invoice_payer_id
 * @property string $invoice_payer_name
 * @property string $invoice_payer_primary_staff_name_at_sale
 * @property enum $invoice_state
 * @property string $key
 * @property currency $net_paid_amount
 * @property currency $net_paid_revenue_amount
 * @property currency $net_paid_tax_amount
 * @property enum $payment_method
 * @property integer $payment_transaction_id
 * @property currency $payments_amount
 * @property enum $processing_method
 * @property string $processor_transaction_id
 * @property currency $refunds_amount
 * @property string $sale_location_name
 * @property currency $transaction_amount
 * @property datetime $transaction_at
 * @property boolean $transaction_autopay
 * @property date $transaction_date
 * @property integer $transaction_id
 * @property enum $transaction_state
 * @property enum $transaction_type
 * @property datetime $voided_at
 */
class Transaction extends Model\ReportingModel {
    public static $endPoints = array(
        'select' => array(
            'httpMethod' => 'POST',
            'urlPath' => '/desk/api/v3/reports/transactions/queries'
        )
    );

    public static $fields = array(
        'business_id',
        'business_name',
        'business_subdomain',
        'commission_recipient_name',
        'created_by_name',
        'credit_card_name',
        'currency_code',
        'error_message',
        'external_payment_name',
        'failed_at',
        'failed_date',
        'franchise_id',
        'invoice_autobill',
        'invoice_due_date',
        'invoice_id',
        'invoice_number',
        'invoice_payer_home_location',
        'invoice_payer_id',
        'invoice_payer_name',
        'invoice_payer_primary_staff_name_at_sale',
        'invoice_state',
        'key',
        'net_paid_amount',
        'net_paid_revenue_amount',
        'net_paid_tax_amount',
        'payment_method',
        'payment_transaction_id',
        'payments_amount',
        'processing_method',
        'processor_transaction_id',
        'refunds_amount',
        'sale_location_name',
        'transaction_amount',
        'transaction_at',
        'transaction_autopay',
        'transaction_date',
        'transaction_id',
        'transaction_state',
        'transaction_type',
        'voided_at',
    );
}