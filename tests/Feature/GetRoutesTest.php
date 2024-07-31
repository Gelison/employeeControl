<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GetRoutesTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    /** @test */

    public function division_test_by_registered_user_response(): void
    {
        // $this->withoutExceptionHandling();
        $response = $this->get('/api/division');

        $response->assertInternalServerError();
    }

    /** @test */

    public function doctype_test_by_registered_user_response(): void
    {
        // $this->withoutExceptionHandling();
        $response = $this->get('/api/doctype');

        $response->assertInternalServerError();
    }

    /** @test */

    public function level_test_by_registered_user_response(): void
    {
        // $this->withoutExceptionHandling();
        $response = $this->get('/api/level');

        $response->assertInternalServerError();
    }

    /** @test */

    public function position_test_by_registered_user_response(): void
    {
        // $this->withoutExceptionHandling();
        $response = $this->get('/api/position');

        $response->assertInternalServerError();
    }
}
