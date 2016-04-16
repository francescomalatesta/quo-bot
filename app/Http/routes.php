<?php

$app->post('webhook', function(\Illuminate\Http\Request $request) use ($app) {
    $incomingMessages = $request->get('entry');
    $incomingMessage = $incomingMessages[0];

    $incomingMessageText = $incomingMessage['messaging'][0]['message']['text'];



    file_put_contents('test.dat', $incomingMessageText);
});

$app->get('webhook', function (\Illuminate\Http\Request $request) use ($app) {
    if($request->get('hub_verify_token') == env('VERIFY_TOKEN')) {
        return $request->get('hub_challenge');
    }

    return 'Wrong validation token';
});
