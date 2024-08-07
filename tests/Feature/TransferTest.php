<?php

namespace Tests\Feature;

use App\Models\Transfer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TransferTest extends TestCase
{
    use RefreshDatabase;
    /** @test */

    public function test_can_create_transfer()
    {
        $transferData = [
            'information_id' => '1',
            'date' => '10.12.2000',
            'transfers_occasion' => 'test',
            'division_id' => '1',
            'etc_persent' => '10',
            'contract_persent' => '10',
            'contract_beginning' => 'test',
            'contract_ending' => 'test',
            'position_id' => '1',
        ];

        $response = $this->postJson('/api/transfers', $transferData);

        $response->assertStatus(201)
            ->assertJsonFragment($transferData);
    }
    /** @test */

    public function test_can_show_transfer()
    {
        $transfer = Transfer::factory()->create();

        $response = $this->get("/api/transfers/{$transfer->id}");

        $response->assertStatus(200)
            ->assertJsonFragment(['id' => $transfer->id]);
    }
    /** @test */

    public function test_can_update_transfer()
    {
        $transfer = Transfer::factory()->create();

        $updateData = [
            'information_id' => '1',
            'date' => '10.12.2000',
            'transfers_occasion' => 'test',
            'division_id' => '1',
            'etc_persent' => '10',
            'contract_persent' => '10',
            'contract_beginning' => 'test',
            'contract_ending' => 'test',
            'position_id' => '1',
        ];

        $response = $this->putJson("/api/transfers/{$transfer->id}", $updateData);

        $response->assertStatus(200)
            ->assertJsonFragment($updateData);
    }
    /** @test */

    public function test_can_delete_transfer()
    {
        $transfer = Transfer::factory()->create();

        $response = $this->delete("/api/transfers/{$transfer->id}");

        $response->assertStatus(200)
            ->assertJson([
                'message' => 'entity removed'
            ]);
    }
}
