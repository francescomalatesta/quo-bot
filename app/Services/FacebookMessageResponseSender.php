<?php

namespace App\Services;

use App\Quote;
use GuzzleHttp\Client;

class FacebookMessageResponseSender
{
    public function sendQuote($recipientUserId, Quote $quote)
    {
        $client = new Client(['base_uri' => 'https://graph.facebook.com/v2.6/']);

        $client->request(
            'POST',
            'me/messages',
            [
                'query' => ['access_token' => env('PAGE_ACCESS_TOKEN')],
                'json' => [
                    'recipient' => [
                        'id' => $recipientUserId
                    ],
                    'message' => [
                        'text' => '"' . $quote->getQuote() . '" - ' . $quote->getAuthor() . '.'
                    ]
                ]
            ]
        );
    }
}
