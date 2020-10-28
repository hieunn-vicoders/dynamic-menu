<?php

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
    $api->group(['prefix' => 'admin'], function ($api) {
        $api->get('config/menus', 'VCComponent\Laravel\Dynamic\Http\Controllers\Api\Admin\DynamicController@index');
        $api->get('config/menus/user', 'VCComponent\Laravel\Dynamic\Http\Controllers\Api\Admin\DynamicController@showUser');
        $api->get('config/menus/script-manager', 'VCComponent\Laravel\Dynamic\Http\Controllers\Api\Admin\DynamicController@showScriptManager');
    });
});
