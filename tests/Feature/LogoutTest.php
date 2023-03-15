<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LogoutTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;
    public function test_can_user_logout()
    {

        $user = User::factory()
            ->create();


        $this
            ->followingRedirects();

        $this
            ->actingAs($user)
            ->get('logout')
            ->assertOk();
    }
}
