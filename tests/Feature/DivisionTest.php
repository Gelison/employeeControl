<?php

namespace Tests\Feature;

use App\Models\Division;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DivisionTest extends TestCase
{
    use RefreshDatabase;
    /** @test */

    public function test_can_list_divisions()
    {
        $division = Division::factory()->create();

        $response = $this->get('/api/divisions');

        $response->assertStatus(200)
            ->assertJsonFragment(['id' => $division->id]);
    }
    /** @test */

    public function test_can_create_division()
    {
        $divisionData = [
            'name' => 'Test Division',
        ];

        $response = $this->postJson('/api/divisions', $divisionData);

        $response->assertStatus(201)
            ->assertJsonFragment($divisionData);
    }
    /** @test */

    public function test_can_update_division()
    {
        $division = Division::factory()->create();

        $updateData = [
            'name' => 'Updated Division Name',
        ];

        $response = $this->putJson("/api/divisions/{$division->id}", $updateData);

        $response->assertStatus(200)
            ->assertJsonFragment($updateData);
    }
    /** @test */

    public function test_can_delete_division()
    {
        $division = Division::factory()->create();

        $response = $this->delete("/api/divisions/{$division->id}");

        $response->assertStatus(200)
            ->assertJson([
                'message' => 'entity removed'
            ]);
    }
}
