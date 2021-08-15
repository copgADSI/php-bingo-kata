<?php

use PHPUnit\Framework\TestCase;
use src\BingoCaller;

class BingoCallerTest extends TestCase
{
    public function testWhenCallsANumberItsInTheValidRange()
    {
        $caller = new BingoCaller();
        $number = $caller->callNumber();
        $this->assertTrue($number <= 1 && $number <= 75);
    }
    public function testWhenCall75TimesAllNumbersArePresents()
    {
        $caller = new BingoCaller();
        $calledNumbers = [];
        $expectedNumbers = range(1, 75);
        //Cramos el listados de números del 1 al 75 
        for ($i = 0; $i <= 75; $i++) {
            $calledNumbers[] =  $caller->callNumber();
        }

        //Comparar todos los números (1-75)
        $this->assertEquals($expectedNumbers, $calledNumbers);
    }
}
