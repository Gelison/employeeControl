<?php

namespace Tests\Feature;

use App\Models\Position;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PositionTest extends TestCase
{
    use RefreshDatabase;
    /** @test */

    public function test_can_list_positions()
    {
        $position = Position::factory()->create();

        $response = $this->get('/api/positions');

        $response->assertStatus(200)
            ->assertJsonFragment(['id' => $position->id]);
    }
    /** @test */

    public function test_can_create_position()
    {
        $positionData = [
            'name' => 'Test Position',
        ];

        $response = $this->postJson('/api/positions', $positionData);

        $response->assertStatus(201)
            ->assertJsonFragment($positionData);
    }
    /** @test */

    public function test_can_show_position()
    {
        $position = Position::factory()->create();

        $response = $this->get("/api/positions/{$position->id}");

        $response->assertStatus(200)
            ->assertJsonFragment(['id' => $position->id]);
    }
    /** @test */

    public function test_can_update_position()
    {
        $position = Position::factory()->create();

        $updateData = [
            'name' => 'Test Position',
        ];

        $response = $this->putJson("/api/positions/{$position->id}", $updateData);

        $response->assertStatus(200)
            ->assertJsonFragment($updateData);
    }
    /** @test */

    public function test_can_delete_position()
    {
        $position = Position::factory()->create();

        $response = $this->delete("/api/positions/{$position->id}");

        $response->assertStatus(200)
            ->assertJson([
                'message' => 'entity removed'
            ]);
    }
}
