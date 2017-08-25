<?php

class InvalidTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @see http://php.net/manual/en/migration70.incompatible.php#migration70.incompatible.other.json-to-jsond
     */
    public function testEmpty()
    {
        $parser = new Parse\Json();
        $parser->decode('');
    }

    /**
     * @see http://php.net/manual/en/migration70.incompatible.php#migration70.incompatible.other.json-to-jsond
     */
    public function testEndsInDecimal()
    {
        $parser = new Parse\Json();
        $parser->decode('{"number": 34.}');
    }

    /**
     * @see http://php.net/manual/en/migration70.incompatible.php#migration70.incompatible.other.json-to-jsond
     */
    public function testExponent()
    {
        $parser = new Parse\Json();
        $parser->decode('{"number": 3.e3}');
    }
}