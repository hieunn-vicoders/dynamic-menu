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
        $configs = collect($configs)->map(function ($config) {
            $configLabels = $config['label'];
            $configRoles = $config['roles'];
            $configIcons = $config['icon'];
            $configPermissions = $config['permission'];
            $has_value_inputs = collect($config['dropdown'])->map(function ($input) {
                $inputLabels = $input['label'];
                $inputRoles = $input['roles'];
                $inputPermissions = $input['permission'];
                foreach ($inputRoles as $role) {
                    return $input;
                };
                foreach ($inputPermissions as $permission) {
                    return $input;
                };
            })->unique()->toArray();

            foreach ($has_value_inputs as $index => $has_value_input) {
                if ($has_value_input == null) {
                    array_splice($has_value_inputs, $index, 1);
                }
            }


            $config['dropdown'] = $has_value_inputs;
            foreach ($configRoles as $role) {
                return $config;
            };

            $config['dropdown'] = $has_value_inputs;
            foreach ($configPermissions as $permission) {
                return $config;
            };
        })->unique()->toArray();

        foreach ($configs as $index => $config) {
            if ($config == null) {
                array_splice($configs, $index, 1);
            }
        }

        return response()->json($configs);
    }
}
