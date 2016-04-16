<?php

$app->get('webhook', function (\Illuminate\Http\Request $request) use ($app) {
    if($request->get('verify_token') == env('VERIFY_TOKEN')) {
        return $request->get('challenge');
    }

    return 'Wrong validation token';
});
