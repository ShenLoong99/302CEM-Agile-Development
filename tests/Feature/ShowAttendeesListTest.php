<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ShowAttendeesListTest extends TestCase
{
    public function test_load_attendees_page() {
        $response = $this->get('/attendees/2');
        $response->assertStatus(200);
    }
}

?>