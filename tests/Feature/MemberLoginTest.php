<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MemberLoginTest extends TestCase
{
    /** @test_login_by_member */
    public function test_login_by_member()
    {
        // $this->withoutMiddleware();

        // $credential = [
        //     'email' => 'wayne.ng6010@gmail.com',
        //     'password' => '12341234',
        //     '_token' => csrf_token(),
        // ];

        // $response = $this->post('/login',$credential);

        // $response->assertSessionHasErrors();

        $response = $this->json('POST', 
            '/login', 
            ['email' => 'wayne.ng6010@gmail.com',
            'password' => '12341234',
            '_token' => csrf_token()]
        );

        $response->assertStatus(204);


    }
}
