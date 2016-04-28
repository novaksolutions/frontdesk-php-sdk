<?php
use NovakSolutions\FrontDesk;
/**
 * Created by PhpStorm.
 * User: joey_000
 * Date: 4/28/2016
 * Time: 1:58 PM
 */
class InvoiceTest extends PHPUnit_Framework_TestCase{
    public function setup(){
        $credentialsFilePath = dirname(dirname(dirname(__FILE__))) . '/resource/oauth_credentials.php';

        if(!file_exists($credentialsFilePath)) {
            throw new Exception("You must populate the oauth_credentials.php file for this test to run.  Copy the oauth_credentials_sample.php file in the test/resource directory.");
        }
        require_once($credentialsFilePath);
    }

//    public function testAll(){
//        $gotRecords = false;
//        $results = FrontDesk\Model\Desk\Invoice::all();
//        foreach($results as $result){
//            $gotRecords = true;
//            break;
//        }
//
//        $this->assertTrue($gotRecords);
//    }
    
    public function testNewer(){
        $query = FrontDesk\Model\Desk\Invoice::where("invoice_state", "eq", "closed");
        $records = $query->query();
        $this->assertTrue(count($records) > 0);
    }

} 