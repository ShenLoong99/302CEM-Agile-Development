<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class InsertEventTest extends TestCase
{
    //** @test_load_insert_page */
    public function test_load_insert_event_page() {
        $response = $this->get('insert_event');
        $response->assertStatus(200);
    }

    // public function test_insert_event() {
    //     $response = $this->json('POST', 
    //         'insert_event', 
    //         ['name' => 'Testing Event', 
    //         'desc' => 'This is description', 
    //         'cat' => 3, 
    //         'venue' => 'Tesco Penang', 
    //         'start' => date('Y-m-d H:i:s'), 
    //         'end' => date('Y-m-d H:i:s', strtotime('+1 day', time())), 
    //         'price' => 12, 
    //         'max' => 200, 
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
