<?php

declare(strict_types=1);

function hello(string $day): string
{
    if ($day === 'morning') {
        return 'good morning!';
    };
    return 'hello!';
}
