<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 3/29/2016
 * Time: 10:43 AM
 */

class CoreParserTest extends PHPUnit_Framework_TestCase{
    public function testBuidModelNameFromEndPoint(){
        $coreParser = new \NovakSolutions\FrontDesk\Generate\CoreParser();
        $modelName = $coreParser->buildModelNameFromEndPoint("/api/v2/account/people");
        $this->assertTrue($modelName == 'Person');
    }

    public function testModelDefinitions(){
        $coreParser = new \NovakSolutions\FrontDesk\Generate\CoreParser();
        $coreApiDocsAsHtml = $this->http_get_contents("https://developer.frontdeskhq.com/docs/api/v2");

        $definitions = $coreParser->extractDataFromHtml($coreApiDocsAsHtml);
        $modelDefinitions = $coreParser->convertToModels($definitions);

        $this->assertEquals($modelDefinitions['Account']['Person']['queryOperationClassName'], '\\NovakSolutions\\FrontDesk\\Operation\\Account\\GetPeople');
        $this->assertEquals($modelDefinitions['Account']['Person']['postOperationClassName'], '');
    }

    function http_get_contents($url){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        if(FALSE === ($retval = curl_exec($ch))) {
            error_log(curl_error($ch));
        } else {
            return $retval;
        }
    }
}