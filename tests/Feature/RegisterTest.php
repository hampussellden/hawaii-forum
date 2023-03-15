<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterTest extends TestCase
{
    /**
     * A basic feature test example.
     */

    public function test_register_redirect_is_ok()
    {
        $response = $this->get('/register');

        $response->assertOk();
    }

    public function test_can_register_user(): void
    {
        $response = $this->post('/register-user', [
            'username' => 'admin',
            'email' => 'admin@forum.se',
            'password' => Hash::make('starwars'),
            'password-validate' => 'starwars'
        ]);

        $response->assertRedirect('/');
    }

    public function test_user_is_stored()
    {

        $user = User::factory()
            ->create();

        $this->assertDatabaseHas('users', []);
    }


    use RefreshDatabase;
}
