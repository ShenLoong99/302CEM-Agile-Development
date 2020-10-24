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
        $response = $this->json('POST', 
            '/login', 
            ['email' => 'ifcchin@gmail.com',
            'password' => 'P@$$vv0rD',
            '_token' => csrf_token()]
        );

        $response->assertStatus(204);


    }
}

?>