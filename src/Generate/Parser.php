<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 2/23/2016
 * Time: 11:32 PM
 */

namespace NovakSolutions\FrontDesk\Generate;


interface Parser {
    public function extractDefinitions($html);
} 