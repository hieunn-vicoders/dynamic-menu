<?php

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
    $api->group(['prefix' => 'admin'], function ($api) {
        $api->get('config/menus', 'VCComponent\Laravel\Dynamic\Http\Controllers\Api\Admin\DynamicController@index');
    });
});
