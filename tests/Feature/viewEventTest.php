<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
// use Illuminate\Support\MessageBag;

class ViewEventTest extends TestCase
{
    /** @test_load_edit_page */
    public function test_load_view_page()
    {
        $response = $this->get('/view_event');
        $response->assertStatus(200);
    }
     
    public function test_load_admin_page()
    {
        $response = $this->get('/admin_event');
        $response->assertStatus(200);
    }

        
} 