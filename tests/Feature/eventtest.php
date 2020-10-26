<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class eventtest extends TestCase
{
    public function test_load_registered_page()
    {
        $response = $this->get('/e/registered_event/100');
        $response->assertStatus(200);
    }
}
