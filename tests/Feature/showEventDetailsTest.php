<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ShowEventDetailsTest extends TestCase
{
    public function test_load_show_page() {
        $response = $this->get('/eventdetails/1');
        $response->assertStatus(200);
    }

    // public function test_delete_event_details() {
    //     $response = $this->delete('/eventdetails/12');
    //     $response->assertStatus(200);
    // }
}

?>
