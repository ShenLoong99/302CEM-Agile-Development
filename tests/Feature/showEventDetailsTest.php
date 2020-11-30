<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ShowEventDetailsTest extends TestCase
{
    public function test_load_show_page() {
        $response = $this->get('/eventdetails/2');
        $response->assertStatus(200);
    }

    // public function test_delete_event_details() {
    //     $response = $this->delete('/eventdetails/3');
    //     $response->assertStatus(200);
    // }

    // public function test_book_event() {
    //     $response = $this->json('POST', 
    //         'eventdetails/6', [ 
    //         'id' => 2, 
    //         'qty' => 5 
    //     ]);
    //     $response->assertStatus(200);
    // }
}

?>
