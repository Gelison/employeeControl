<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GetLoginRoutesTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    /** @test */

    public function division_test_by_registered_user_response(): void
    {
        $user = User::factory()->create();
        // $this->withoutExceptionHandling();
        $response = $this->actingAs($user)->get('/api/division');

        $response->assertStatus(200);
    }

    /** @test */

    public function doctype_test_by_registered_user_response(): void
    {
        $user = User::factory()->create();
        // $this->withoutExceptionHandling();
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
        // $this->withoutExceptionHandling();
        $response = $this->actingAs($user)->get('/api/position');

        $response->assertStatus(200);
    }
}
