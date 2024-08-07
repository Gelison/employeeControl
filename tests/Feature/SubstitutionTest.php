<?php

namespace Tests\Feature;

use App\Models\Substitution;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SubstitutionTest extends TestCase
{
    use RefreshDatabase;
    /** @test */

    public function test_can_create_substitution()
    {
        $substitutionData = [
            'information_id' => '1',
            'date' => '10.12.2000',
            'order_number' => '124',
            'substitutions_occasion' => 'test',
            'position_id' => '1'
        ];

        $response = $this->postJson('/api/substitutions', $substitutionData);

        $response->assertStatus(201)
            ->assertJsonFragment($substitutionData);
    }
    /** @test */

    public function test_can_show_substitution()
    {
        $substitution = Substitution::factory()->create();

        $response = $this->get("/api/substitutions/{$substitution->id}");

        $response->assertStatus(200)
            ->assertJsonFragment(['id' => $substitution->id]);
    }
    /** @test */

    public function test_can_update_substitution()
    {
        $substitution = Substitution::factory()->create();

        $updateData = [
            'information_id' => '1',
            'date' => '10.12.2000',
            'order_number' => '124',
            'substitutions_occasion' => 'updateData',
            'position_id' => '1'
        ];

        $response = $this->putJson("/api/substitutions/{$substitution->id}", $updateData);

        $response->assertStatus(200)
            ->assertJsonFragment($updateData);
    }
    /** @test */

    public function test_can_delete_substitution()
    {
        $substitution = Substitution::factory()->create();

        $response = $this->delete("/api/substitutions/{$substitution->id}");

        $response->assertStatus(200)
            ->assertJson([
                'message' => 'entity removed'
            ]);
    }
}
