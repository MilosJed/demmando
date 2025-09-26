<?php

declare(strict_types=1);

namespace Milos\Demmando;

final class Hello
{
    public static function greet(string $name): string
    {
        return "Ahoj, {$name}!";
    }
}
