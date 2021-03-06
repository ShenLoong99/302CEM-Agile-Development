<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegEventTest extends TestCase
{
    public function test_load_registered_page()
    {
        // $response = $this->get('/e/registered_event/1');
        $response = $this->json('GET', 
            'eventdetails/2', 
            [ 'id' => 1 ]
        );
        $response->assertStatus(200);
    }
}
