<?php

namespace Tests\Feature;

use App\Models\Certification;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CertificationTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function test_can_create_certification()
    {
        $certData = [
            'information_id' => '1',
            'date' => '01.01.2000',
            'record_number' => '12346',
            'division_id' => '1',
            'position_id' => '1',
            'recomendetion' => 'ok',
        ];

        $response = $this->postJson('/api/certifications', $certData);

        $response->assertStatus(201)
            ->assertJsonFragment($certData);
    }
    /** @test */
    public function test_can_update_certification()
    {
        $certification = Certification::factory()->create();

        $updateData = [
            'information_id' => '2',
            'date' => '01.01.2123',
            'record_number' => '12',
            'division_id' => '2',
            'position_id' => '2',
            'recomendetion' => 'Updated ok',
            'name' => 'Updated Certification Name',
            'description' => 'Updated description'
        ];

        $response = $this->putJson("/api/certifications/{$certification->id}", $updateData);

        $response->assertStatus(200)
            ->assertJsonFragment($updateData);
    }
    /** @test */
    public function test_can_delete_certification()
    {
        $certification = Certification::factory()->create();

        $response = $this->delete("/api/certifications/{$certification->id}");

        $response->assertStatus(200)
            ->assertJson([
                'message' => 'entity removed'
            ]);
    }
}
