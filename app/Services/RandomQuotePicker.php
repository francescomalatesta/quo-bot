<?php

namespace App\Services;


use App\Quote;

class RandomQuotePicker
{
    public function pick()
    {
        $result = app('db')->select('SELECT * FROM quotes ORDER BY RANDOM() LIMIT 1;');

        return new Quote(
            $result[0]->quote,
            $result[0]->author
        );
    }
}
