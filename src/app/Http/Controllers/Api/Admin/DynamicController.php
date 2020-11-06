<?php

namespace VCComponent\Laravel\Dynamic\Http\Controllers\Api\Admin;

use VCComponent\Laravel\Vicoders\Core\Controllers\ApiController;

class DynamicController extends ApiController
{
    public function __construct()
    {
    }

    public function index()
    {
        $configs = config('admin-menu-config');
        return response()->json($configs);
    }
}
