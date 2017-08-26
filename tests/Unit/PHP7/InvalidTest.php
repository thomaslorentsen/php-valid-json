<?php

class InvalidTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @see http://php.net/manual/en/migration70.incompatible.php#migration70.incompatible.other.json-to-jsond
     */
    public function testEmpty()
    {
        if ('7' === $this->getPHPVersion()) {
            $this->setExpectedException('Exception', 'Syntax error');
        }
        $parser = new Parse\Json();
        $result = $parser->decode('');
        $this->assertNull($result);
    }

    /**
     * @see http://php.net/manual/en/migration70.incompatible.php#migration70.incompatible.other.json-to-jsond
     */
    public function testEndsInDecimal()
    {
        if ('7' === $this->getPHPVersion()) {
            $this->setExpectedException('Exception', 'Syntax error');
        }
        $parser = new Parse\Json();
        $parser->decode('{"number": 34.}');
    }

    /**
     * @see http://php.net/manual/en/migration70.incompatible.php#migration70.incompatible.other.json-to-jsond
     */
    public function testExponent()
    {
        if ('7' === $this->getPHPVersion()) {
            $this->setExpectedException('Exception', 'Syntax error');
        }
        $parser = new Parse\Json();
        $parser->decode('{"number": 3.e3}');
    }

    public function getPHPVersion()
    {
        $version = phpversion();
        list($major, $minor, $patch) = explode('.', $version);
        return $major;
    }
}