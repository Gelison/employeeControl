<?php

namespace Tests\Feature;

use App\Models\Education;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EducationTest extends TestCase
{
    use RefreshDatabase;
    /** @test */

    public function test_cannot_access_index_route()
    {
        $response = $this->get('/api/educations');

        $response->assertStatus(404);
    }
    /** @test */

    public function test_can_create_education()
    {
        $educationData = [
            'information_id' => 1,
            'date' => '2023-10-15',
            'doctype_id' => 1,
            'number' => '12345',
            'level_id' => 1,
            'qualification' => 'Bachelor',
            'speciality' => 'Computer Science',
            'rank' => 'First Class',
            'education_form' => 'Full-time',
            'institution' => 'University of Example'

        ];

        $response = $this->postJson('/api/educations', $educationData);

        $response->assertStatus(201)
            ->assertJsonFragment($educationData);
    }
    /** @test */

    public function test_can_show_education()
    {
        $education = Education::factory()->create();

        $response = $this->get("/api/educations/{$education->id}");

        $response->assertStatus(200)
            ->assertJsonFragment(['id' => $education->id]);
    }
    /** @test */

    public function test_can_update_education()
    {
        $education = Education::factory()->create();

        $updateData = [
            'information_id' => 1,
            'date' => '2023-10-15',
            'doctype_id' => 1,
            'number' => '12345',
            'level_id' => 1,
            'qualification' => 'Bachelor',
            'speciality' => 'Computer Science',
            'rank' => 'First Class',
            'education_form' => 'Full-time',
            'institution' => 'University of Example'
        ];

        $response = $this->putJson("/api/educations/{$education->id}", $updateData);

        $response->assertStatus(200)
            ->assertJsonFragment($updateData);
    }
    /** @test */

    public function test_can_delete_education()
    {
        $education = Education::factory()->create();

        $response = $this->delete("/api/educations/{$education->id}");

        $response->assertStatus(200)
            ->assertJson([
                'message' => 'entity removed'
            ]);
    }
}
