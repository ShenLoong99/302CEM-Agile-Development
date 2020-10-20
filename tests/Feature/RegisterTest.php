<?php
namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
// use Illuminate\Support\MessageBag;

class RegisterTest extends TestCase
{
    // /** @test_load_edit_page */
    // public function test_load_edit_page () {
    //     $response = $this->get('/edit/1');
    //     $response->assertStatus(200);
    // }

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