<?php

namespace App\Services;


use App\Quote;

class RandomQuotePicker
{
    private $quotes;

    public function __construct()
    {
        $this->quotes = json_decode(file_get_contents('quotes.json'), true);
    }

    public function pick()
    {
        $randomQuote = $this->quotes[array_rand($this->quotes)];

        return new Quote(
            $randomQuote['quote'],
            $randomQuote['author']
        );
    }
}
