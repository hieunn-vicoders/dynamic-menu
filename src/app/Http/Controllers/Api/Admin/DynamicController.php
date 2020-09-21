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
        $user = $this->getAuthenticatedUser();

        $configs   = config('admin-menu-config');
        $configs = collect($configs)->map(function ($config) use ($user) {
            $configRoles            = $config['roles'];
            $userRoles =   $user->roles->pluck('slug')->toArray();
            $has_value_inputs = collect($config['dropdown'])->map(function ($input) use ($userRoles) {
                $inputRoles = $input['roles'];
                foreach ($inputRoles as $role) {
                    if (in_array($role, $userRoles)) {
                        return $input;
                    };
                }
            })->unique()->toArray();

            foreach ($has_value_inputs as $index => $has_value_input) {
                if ($has_value_input == null) {
                    array_splice($has_value_inputs, $index, 1);
                }
            }

            $config['dropdown'] = $has_value_inputs;
            foreach ($configRoles as $role) {
                if (in_array($role, $userRoles)) {
                    return $config;
                };
            }
        })->unique()->toArray();

        foreach ($configs as $index => $config) {
            if ($config == null) {
                array_splice($configs, $index, 1);
            }
        }

        return response()->json($configs);
    }
}
