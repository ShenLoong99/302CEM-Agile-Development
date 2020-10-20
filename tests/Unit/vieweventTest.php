<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
// use Illuminate\Support\MessageBag;

class vieweventTest extends TestCase
{
    /** @test_load_edit_page */
    public function test_load_view_page()
    {
        $response = $this->get('/e/view_event/1');
        $response->assertStatus(200);
    }
     
    public function test_load_admin_page()
    {
        $response = $this->get('/e/admin_event/1');
        $response->assertStatus(200);
    }

        
} 