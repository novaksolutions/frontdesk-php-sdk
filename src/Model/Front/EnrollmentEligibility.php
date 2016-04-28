<?php
/**
 * Copyright 2016 (C) NovakSolutions, LLC
 */

namespace NovakSolutions\FrontDesk\Model\Front;
use NovakSolutions\FrontDesk\Model;

/**
 * Class EnrollmentEligibility
 * @package NovakSolutions\FrontDesk\Model\Front
 * @property integer $person_id
 * @property boolean $can_enroll
 * @property array $restrictions
 */
class EnrollmentEligibility extends Model\CoreModel {
    public static $getByIdOperationClassName = '';
    public static $putOperationClassName = '';
    public static $postOperationClassName = '';
    public static $deleteOperationClassName = '';
    public static $queryOperationClassName = '';

    public static $fields = array(
        'person_id',
        'can_enroll',
        'restrictions',
    );
}