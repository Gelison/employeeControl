<?php

namespace Tests\Feature\Get;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GetDivision extends TestCase
{
    /**
     * A basic feature test example.
     */
    /** @test */

    public function test_the_application_returns_a_successful_response(): void
    {
        $user = User::factory()->create();
        // $this->withoutExceptionHandling();
        $response = $this->actingAs($user)->get('/api/division');

        $response->assertStatus(200);
    }
}
