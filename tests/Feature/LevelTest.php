<?php

namespace Tests\Feature;

use App\Models\Level;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LevelTest extends TestCase
{
    use RefreshDatabase;
    /** @test */

    public function test_can_list_levels()
    {
        $level = Level::factory()->create();

        $response = $this->get('/api/levels');

        $response->assertStatus(200)
            ->assertJsonFragment(['id' => $level->id]);
    }
    /** @test */

    public function test_can_create_level()
    {
        $levelData = [
            'name' => 'Test Level',
        ];

        $response = $this->postJson('/api/levels', $levelData);

        $response->assertStatus(201)
            ->assertJsonFragment($levelData);
    }
    /** @test */

    public function test_can_show_level()
    {
        $level = Level::factory()->create();

        $response = $this->get("/api/levels/{$level->id}");

        $response->assertStatus(200)
            ->assertJsonFragment(['id' => $level->id]);
    }
    /** @test */

    public function test_can_update_level()
    {
        $level = Level::factory()->create();

        $updateData = [
            'name' => 'Updated Level Name',
        ];

        $response = $this->putJson("/api/levels/{$level->id}", $updateData);

        $response->assertStatus(200)
            ->assertJsonFragment($updateData);
    }
    /** @test */

    public function test_can_delete_level()
    {
        $level = Level::factory()->create();

        $response = $this->delete("/api/levels/{$level->id}");

        $response->assertStatus(200)
            ->assertJson([
                'message' => 'entity removed'
            ]);
    }
}
