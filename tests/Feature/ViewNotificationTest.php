<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ViewNotificationTest extends TestCase
{
    /** @test_show_notificaitons */
    public function test_show_notificaitons()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

}
