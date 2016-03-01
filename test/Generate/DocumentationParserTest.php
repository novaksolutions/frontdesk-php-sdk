<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 2/11/2016
 * Time: 11:43 PM
 */

class DocumentationParserTest extends PHPUnit_Framework_TestCase{
    public function testGetDocumentation(){
        $this->assertEquals(0, 0);
    }

    public function testParseReportingDocumentation(){

    }

    public function testParseCoreDocumentation(){
        $v3Parser = new \NovakSolutions\FrontDesk\Generate\V3Parser();
        $definitions = $v3Parser->extractDefinitions(file_get_contents(dirname(dirname(__FILE__)) . "/resource/v3.html"));
        $this->assertEquals(array_keys($definitions['Clients']['fields']['person_state']['values']), array('active', 'deleted', 'hidden'));
    }
} 