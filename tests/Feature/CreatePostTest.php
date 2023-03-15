<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Thread;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CreatePostTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_create_post(): void
    {
        $category = Category::factory()->create();
        $thread = Thread::factory()->create();
        $user = User::factory()->create();
        $post = ['thread' => $thread->id, 'content' => 'I hate starwars'];
        $this->followingRedirects();
        $this->actingAs($user)->post('posts', $post);
        $this->assertDatabaseHas('posts', ['content' => 'I hate starwars']);
    }
}
