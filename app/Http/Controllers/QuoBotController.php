<?php

namespace App\Http\Controllers;

use App\Services\FacebookMessageResponseSender;
use App\Services\RandomQuotePicker;
use Illuminate\Http\Request;

class QuoBotController extends Controller
{
    /**
     * Manages the token verification process.
     *
     * @param Request $request
     * @return mixed|string
     */
    public function getWebhook(Request $request)
    {
        if($request->get('hub_verify_token') == env('VERIFY_TOKEN')) {
            return $request->get('hub_challenge');
        }

        return 'Wrong validation token';
    }

    /**
     * Handles the incoming message.
     *
     * @param Request $request
     */
    public function postWebhook(Request $request, RandomQuotePicker $picker, FacebookMessageResponseSender $sender)
    {
        $incomingMessages = $request->get('entry');
        $incomingMessageText = $incomingMessages[0]['messaging'][0]['message']['text'];
        $incomingMessageSenderId = $incomingMessages[0]['messaging'][0]['sender']['id'];

        $quote = $picker->pick();
        $sender->sendQuote(
            $incomingMessageSenderId,
            $quote
        );
    }
}
