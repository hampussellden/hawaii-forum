<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateCategoryTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_create_category(): void
    {
        $user = User::factory()->create();
        $category = ['name' => 'starwars'];
        $this->followingRedirects();
        $this->actingAs($user)->post('/categories', $category);
        $this->assertDatabaseHas('categories', ['name' => 'starwars']);
    }
}
