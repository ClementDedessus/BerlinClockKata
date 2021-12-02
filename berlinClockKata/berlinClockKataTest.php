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
        $actual = $minute->fiveMinutes(0);
        $this->assertEquals("", $actual);
    }
    public function testHours()
    {
        $hour = new berlinClockKata();
        $actual = $hour->hours(3);
        $this->assertEquals("111", $actual);
    }
}