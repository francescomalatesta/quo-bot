<?php

namespace App;


class Quote
{
    private $quote;
    private $author;

    /**
     * Quote constructor.
     *
     * @param $quote
     * @param $author
     */
    public function __construct($quote, $author)
    {
        $this->quote = $quote;
        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getQuote()
    {
        return $this->quote;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }
}