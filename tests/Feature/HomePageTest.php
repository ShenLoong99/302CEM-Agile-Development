<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
// use Illuminate\Support\MessageBag;

class HomePageTest extends TestCase
{
    /** @test_load_edit_page */
    public function test_load_home_page()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
} 