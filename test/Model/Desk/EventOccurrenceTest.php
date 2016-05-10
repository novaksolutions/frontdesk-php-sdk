<?php
use NovakSolutions\FrontDesk;
/**
 * Created by PhpStorm.
 * User: joey_000
 * Date: 4/28/2016
 * Time: 1:58 PM
 */
class EventOccurrenceTest extends PHPUnit_Framework_TestCase{
    public function setup(){
        $credentialsFilePath = dirname(dirname(dirname(__FILE__))) . '/resource/oauth_credentials.php';

        if(!file_exists($credentialsFilePath)) {
            throw new Exception("You must populate the oauth_credentials.php file for this test to run.  Copy the oauth_credentials_sample.php file in the test/resource directory.");
        }
        require_once($credentialsFilePath);

        date_default_timezone_set("UTC");
    }

    public function testDoubleWhere(){
        $query = FrontDesk\Model\Desk\EventOccurrence::where("end_at", "gt", date('c', strtotime("-7 day")))->where("end_at", "lt", date('c', strtotime("+7 day")));
        $records = $query->query();
        $this->assertTrue(count($records) > 0);
    }
    
    public function testNewer(){
        $query = FrontDesk\Model\Desk\EventOccurrence::where("end_at", "gt", date('c', strtotime("-7 day")));
        $records = $query->query();
        $this->assertTrue(count($records) > 0);
    }

} 