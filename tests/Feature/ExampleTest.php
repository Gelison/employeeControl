<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Models\User;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /** @test */

    public function test_the_application_returns_a_successful_response(): void
    {
        $user = User::factory()->create();
        // $this->withoutExceptionHandling();
        $response = $this->actingAs($user)->get('/api/division');

        $response->assertStatus(200);
    }
}
