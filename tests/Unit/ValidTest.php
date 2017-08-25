<?php

class ValidTest extends \PHPUnit_Framework_TestCase
{
    public function testSimple()
    {
        $parser = new Parse\Json();
        $parser->decode('{"hello":"world"}');
    }
}
