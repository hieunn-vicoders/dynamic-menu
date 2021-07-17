<?php

namespace VCComponent\Laravel\Dynamic\Test;

use Illuminate\Foundation\Testing\RefreshDatabase;
use VCComponent\Laravel\Dynamic\Test\TestCase;

class DynamicMenuConfigTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function should_get_dynamic_menu_config_admin()
    {
        $check = [
            'dashboard',
            'setup',
            'search-optimization',
            'statistical',
            'system_user',
        ];
        $response = $this->call('GET', 'api/admin/config/menus');
        $response->assertStatus(200);
        $response->assertJsonFragment([$check]);

    }

}
