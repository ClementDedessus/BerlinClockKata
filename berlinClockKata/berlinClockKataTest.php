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
<<<<<<< HEAD
        $actual = $minute->fiveMinutes(50);
        $this->assertEquals("1111111111", $actual);
=======
        $actual = $minute->fiveMinutes(10);
        $this->assertEquals("11", $actual);
>>>>>>> 99e0910faf3faa6fd38a813855d04db2ea054ebd

    }
}