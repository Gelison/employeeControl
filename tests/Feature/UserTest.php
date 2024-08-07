<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_index()
    {
        $users = User::factory()->count(3)->create();

        $response = $this->get('/api/user');

        $response->assertStatus(200)
            ->assertJsonCount(3, 'data'); // Assuming 'data' key in the response JSON
    }

    public function test_user_store()
    {
        $userData = [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password123'
        ];

        $response = $this->postJson('/api/user', $userData);

        $response->assertStatus(201)
            ->assertJsonFragment(['name' => 'Test User']);
    }

    public function test_user_show()
    {
        $user = User::factory()->create();

        $response = $this->get('/api/user/' . $user->id);

        $response->assertStatus(200)
            ->assertJsonFragment(['id' => $user->id]);
    }

    public function test_user_destroy()
    {
        $user = User::factory()->create();

        $response = $this->delete('/api/user/' . $user->id);

        $response->assertStatus(200)
            ->assertJson(['massage' => 'entiti removed']);
    }
}
