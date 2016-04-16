<?php

$app->post('webhook', 'QuoBotController@postWebhook');
$app->get('webhook', 'QuoBotController@getWebhook');
