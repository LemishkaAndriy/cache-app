<?php

namespace App\Models;

class BlackBox
{
    public static function getBar(): string
    {
        sleep(1);

        return 'foo bar';
    }
}
