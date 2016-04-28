<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 2/29/2016
 * Time: 12:07 PM
 */
use NovakSolutions\FrontDesk;

class ClientsTest extends PHPUnit_Framework_TestCase{
    public function setup(){
        $credentialsFilePath = dirname(dirname(dirname(__FILE__))) . '/resource/oauth_credentials.php';

        if(!file_exists($credentialsFilePath)) {
            throw new Exception("You must populate the oauth_credentials.php file for this test to run.  Copy the oauth_credentials_sample.php file in the test/resource directory.");
        }
        require_once($credentialsFilePath);
    }

    public function testAll(){
        $gotRecords = false;
        $results = FrontDesk\Model\Desk\Client::all();
        foreach($results as $result){
            $gotRecords = true;
            break;
        }

        $this->assertTrue($gotRecords);
    }

} 