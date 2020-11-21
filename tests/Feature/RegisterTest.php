<?php
namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
// use Illuminate\Support\MessageBag;

class RegisterTest extends TestCase
{

    /** @test_update_event_details */
    public function test_register_user() {
        $response = $this->json('GET', 
            '/register', 

            [
                'name'  => 'Shaun Lee', 
                'email' => 'leeshaun6699@gmail.com', 
                'phone' => '0162233444', 
                'password' => 'Test1234', 
            ]
        );

        $response->assertStatus(200);
    }
}
?>