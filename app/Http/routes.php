<?php

$app->post('webhook', function(\Illuminate\Http\Request $request) use ($app) {
    $incomingMessage = json_decode($request->get('entry'), true)[0];
    $incomingMessageText = $incomingMessage['messaging']['message']['text'];

    file_put_contents('test.dat', $incomingMessageText);
});

$app->get('webhook', function (\Illuminate\Http\Request $request) use ($app) {
    if($request->get('hub_verify_token') == env('VERIFY_TOKEN')) {
        return $request->get('hub_challenge');
    }

    return 'Wrong validation token';
});
