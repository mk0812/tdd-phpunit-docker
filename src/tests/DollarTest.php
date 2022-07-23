<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once(dirname(__FILE__).'/../Dollar.php');

class DollarTest extends TestCase
{
    public function testMultiplication()
    {
        $five = new Dollar(5);
        $five->times(2);
        $this->assertSame(10, $five->amount);
    }
}