<?php

namespace Tests\Feature;

use App\Models\Doctype;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DoctypeTest extends TestCase
{
    use RefreshDatabase;
    /** @test */

    public function test_can_list_doctypes()
    {
        $doctype = Doctype::factory()->create();

        $response = $this->get('/api/doctypes');

        $response->assertStatus(200)
            ->assertJsonFragment(['id' => $doctype->id]);
    }
    /** @test */

    public function test_can_create_doctype()
    {
        $doctypeData = [
            'name' => 'Test Doctype',
        ];

        $response = $this->postJson('/api/doctypes', $doctypeData);

        $response->assertStatus(201)
            ->assertJsonFragment($doctypeData);
    }
    /** @test */

    public function test_can_update_doctype()
    {
        $doctype = Doctype::factory()->create();

        $updateData = [
            'name' => 'Updated Doctype Name',
        ];

        $response = $this->putJson("/api/doctypes/{$doctype->id}", $updateData);

        $response->assertStatus(200)
            ->assertJsonFragment($updateData);
    }
    /** @test */

    public function test_can_delete_doctype()
    {
        $doctype = Doctype::factory()->create();

        $response = $this->delete("/api/doctypes/{$doctype->id}");

        $response->assertStatus(200)
            ->assertJson([
                'message' => 'entity removed'
            ]);
    }
}
