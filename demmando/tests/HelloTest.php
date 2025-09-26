<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Milos\Demmando\Hello;

final class HelloTest extends TestCase
{
    public function testGreet(): void
    {
        $this->assertSame('Ahoj, Miloš!', Hello::greet('Miloš'));
    }
}
