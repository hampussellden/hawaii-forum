<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    // use RefreshDatabase;

    public function test_view_login_form()
    {
        $response = $this->get('/');
        $response->assertSeeText('WU22 Forum');
        $response->assertStatus(200);
    }

    public function test_user_can_login()
    {

        $response = $this
            ->followingRedirects()
            ->post('login', [
                'email' => 'admin@forum.se',
                'password' => 'starwars',
            ]);

        $response->assertSee('Welcome admin!');
    }

    public function test_user_without_password_cannot_login()
    {
        $response = $this
            ->followingRedirects()
            ->post('login', [
                'email' => 'admin@forum.se',
                'password' => ''
            ]);

        $response->assertSeeText('Something went wrong,');
    }
}
