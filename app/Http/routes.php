<?php

$app->post('webhook', function(\Illuminate\Http\Request $request) use ($app) {
    file_put_contents('test.dat', json_encode($request->all()));
});

$app->get('webhook', function (\Illuminate\Http\Request $request) use ($app) {
    if($request->get('hub_verify_token') == env('VERIFY_TOKEN')) {
        return $request->get('hub_challenge');
    }

    return 'Wrong validation token';
});
