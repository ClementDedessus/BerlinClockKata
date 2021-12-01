<?php

use PHPUnit\Framework\TestCase;

class berlinClockKata
{
    public function minutes(int $number): string
    {
        $minute = '';
        for ($i = 1; $i <= $number; $i++) {
            $minute .= '1';
        }
        return $minute;
        
    }
}