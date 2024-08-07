<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class GetLoginRoutesTest extends TestCase
{
    use RefreshDatabase;

    public function test_register_route()
    {
        $userData = [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password123'
        ];

        $response = $this->postJson('/api/register', $userData);

        $response->assertStatus(200)
            ->assertJsonStructure(['token']);
    }

    public function test_login_route()
    {
        $user = User::factory()->create([
            'password' => Hash::make('password123')
        ]);

        $loginData = [
            'email' => $user->email,
            'password' => 'password123'
        ];

        $response = $this->postJson('/api/login', $loginData);

        $response->assertStatus(200)
            ->assertJsonStructure(['token']);
    }


    /** @test */

    public function division_test_by_registered_user_response(): void
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get('/api/division');

        $response->assertStatus(200);
    }

    /** @test */

    public function doctype_test_by_registered_user_response(): void
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get('/api/doctype');

        $response->assertStatus(200);
    }

    /** @test */

    public function level_test_by_registered_user_response(): void
    {
        $user = User::factory()->create();
        // $this->withoutExceptionHandling();
        $response = $this->actingAs($user)->get('/api/level');

        $response->assertStatus(200);
    }

    /** @test */

    public function position_test_by_registered_user_response(): void
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get('/api/position');

        $response->assertStatus(200);
    }
}
