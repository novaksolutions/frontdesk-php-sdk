<?php
/**
 * Copyright 2016 (C) NovakSolutions, LLC
 */

namespace NovakSolutions\FrontDesk\Model\Front;
use NovakSolutions\FrontDesk\Model;

/**
 * Class Branding
 * @package NovakSolutions\FrontDesk\Model\Front
 * @property string $accent
 * @property string $brand
 * @property string $header
 * @property string $background
 * @property string $client_mode_accent
 * @property string $client_mode_brand
 * @property string $client_mode_header
 * @property string $client_mode_background
 * @property string $client_mode_navigation
 */
class Branding extends Model\CoreModel {
    public static $getByIdOperationClassName = '';
    public static $putOperationClassName = '';
    public static $postOperationClassName = '';
    public static $deleteOperationClassName = '';
    public static $queryOperationClassName = '\NovakSolutions\FrontDesk\Operation\Front\GetBranding';

    public static $fields = array(
        'accent',
        'brand',
        'header',
        'background',
        'client_mode_accent',
        'client_mode_brand',
        'client_mode_header',
        'client_mode_background',
        'client_mode_navigation',
    );
}