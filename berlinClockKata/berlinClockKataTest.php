<?php
require "berlinClockKata.php";

use PHPUnit\Framework\TestCase;

class berlinClockKataTest extends TestCase
{
    public function testMinutes()
    {
        $minute = new berlinClockKata();
        $actual = $minute->minutes(0);
        $this->assertEquals("", $actual);

    }

    public function testFiveMinutes()
    {
        $minute = new berlinClockKata();
        $actual = $minute->fiveMinutes(35);
        $this->assertEquals("1111111", $actual);
    }
}