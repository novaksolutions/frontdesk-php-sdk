<?php
/**
 * Copyright 2016 (C) NovakSolutions, LLC
 */

namespace NovakSolutions\FrontDesk\Model\Desk;
use NovakSolutions\FrontDesk\Model;

/**
 * Class Summary
 * @package NovakSolutions\FrontDesk\Model\Desk
 * @property int $person_id
 * @property string $first_visited_at
 * @property string $last_visited_at
 * @property string $services_visited_at
 */
class Summary extends Model\CoreModel {
    public static $getByIdOperationClassName = '';
    public static $putOperationClassName = '';
    public static $postOperationClassName = '';
    public static $deleteOperationClassName = '';
    public static $queryOperationClassName = '\NovakSolutions\FrontDesk\Operation\Desk\GetSummary';

    public static $fields = array(
        'person_id',
        'first_visited_at',
        'last_visited_at',
        'services_visited_at',
    );
}