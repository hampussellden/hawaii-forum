<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CreateThreadTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_create_thread(): void
    {
        $category = Category::factory()->create();
        $user = User::factory()->create();
        $thread = ['title' => 'starwars, like or not', 'content' => 'I like starwars', 'category' => $category->id];
        $this->followingRedirects();
        $this->actingAs($user)->post('threads', $thread);
        $this->assertDatabaseHas('threads', ['title' => 'starwars, like or not']);
    }
}
