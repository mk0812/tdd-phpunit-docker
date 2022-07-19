<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once(dirname(__FILE__).'/../hello.php');

class HelloTest extends TestCase
{
    public function testHello(): void
    {
        $day = 'evening';
        $this->assertSame(hello($day), 'hello!');
    }
}