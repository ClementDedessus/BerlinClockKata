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
        $actual = $hour->hours(2);
        $this->assertEquals("11", $actual);
    }
}