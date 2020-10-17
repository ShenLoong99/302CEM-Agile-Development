<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
// use Illuminate\Support\MessageBag;

class UpdateEventDetailsTest extends TestCase
{
    /** @test_load_edit_page */
    public function test_load_edit_page () {
        $response = $this->get('/edit/1');
        $response->assertStatus(200);
    }

    /** @test_update_event_details */
    // public function test_update_event_details() {
    //     $response = $this->json('GET', 
    //         '/update/1', 
    //         ['event_name' => 'Testing Event', 
    //         'description' => 'This is description', 
    //         'category' => 3, 
    //         'event_location' => 'Tesco Penang', 
    //         'date_time_start' => date('Y-m-d H:i:s'), 
    //         'date_time_end' => date('Y-m-d H:i:s', strtotime('+1 day', time())), 
    //         'price' => 12.12, 
    //         'max_participants' => 200, 
    //         'active' => 1,
    //         'main_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/58/Wikipedia_Not_Found_Page.png/220px-Wikipedia_Not_Found_Page.png',
    //         'img_1' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/58/Wikipedia_Not_Found_Page.png/220px-Wikipedia_Not_Found_Page.png',
    //         'img_2' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/58/Wikipedia_Not_Found_Page.png/220px-Wikipedia_Not_Found_Page.png', 
    //         'img_3' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/58/Wikipedia_Not_Found_Page.png/220px-Wikipedia_Not_Found_Page.png',
    //         'img_4' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/58/Wikipedia_Not_Found_Page.png/220px-Wikipedia_Not_Found_Page.png', 
    //         'img_5' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/58/Wikipedia_Not_Found_Page.png/220px-Wikipedia_Not_Found_Page.png', 
    //         'img_6' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/58/Wikipedia_Not_Found_Page.png/220px-Wikipedia_Not_Found_Page.png' ]
    //     );

    //     $response->assertStatus(200);
    // }
}
