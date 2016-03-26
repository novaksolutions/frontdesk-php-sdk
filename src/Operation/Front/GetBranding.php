<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 2/29/2016
 * Time: 2:48 PM
 */

namespace NovakSolutions\FrontDesk\Operation\Front;
use NovakSolutions\FrontDesk\Operation;

/**
 * Class GetBranding
 * @package NovakSolutions\FrontDesk\Operation\Front
 */
class GetBranding extends Operation\Operation {
    public static $method = 'GET';
    public static $urlPath = '/api/v2/front/branding';

    public static $fields = array(
    );

    public static function get($subdomain = null){
        $urlArguments = compact('');
        self::makeRequest($urlArguments, null, $subdomain);
    }
}