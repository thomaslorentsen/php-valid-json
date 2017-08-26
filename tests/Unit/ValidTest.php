<?php

class ValidTest extends \PHPUnit_Framework_TestCase
{
    public function testSimple()
    {
        $parser = new Parse\Json();
        $parser->decode('{"hello":"world"}');
    }

    public function testNull()
    {
        $parser = new Parse\Json();
        $result = $parser->decode(null);
        $this->assertNull($result);
    }

    public function testString()
    {
        $parser = new Parse\Json();
        $parser->decode('"hello"');
    }

    public function testNumeric()
    {
        $parser = new Parse\Json();
        $parser->decode('4');
    }
}
