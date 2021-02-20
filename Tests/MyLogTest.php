<?php
use Bogdanova\MyLog;
use PHPUnit\Framework\TestCase;

require __DIR__ . './../vendor/autoload.php';

class MyLogTest extends TestCase
{
    /**
     * @dataProvider providerEquation
     */
    public function testLog($str)
    {
        $this->assertEquals('',  \Bogdanova\MyLog::log($str));
    }
    public function providerEquation ():
    {
        return array (
            array ("testtesttest"),
            array ("test123321"),
            array (111221111),
            array (true)
        );
    }
    public function testLogEx()
    {
        $this->expectException(TypeError::class);
        $this->assertEquals('',  \Bogdanova\MyLog::log(null));
        $this->assertEquals('',  \Bogdanova\MyLog::log());
    }
    public function testWrite()
    {
        $this->assertEquals('',   \Bogdanova\MyLog::write(123));
        $this->assertEquals('',   \Bogdanova\MyLog::write("test"));
        $this->assertEquals('',   \Bogdanova\MyLog::write());
    }
}
?>