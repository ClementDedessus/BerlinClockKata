<?php
require "berlinClockKata.php";

use PHPUnit\Framework\TestCase;

class berlinClockKataTest extends TestCase
{
    public function testMinutes()
    {
        $minute = new berlinClockKata();
        $actual = $minute->minutes(5);
        $this->assertEquals("11111", $actual);
    }
}