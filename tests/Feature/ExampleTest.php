<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Testing\Fluent\AssertableJson;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/api/user');
        
        $response->assertStatus(200);

        $response = $this->get('/api/user/1');


        $response->assertStatus(200);


        // $response = $this->postJson('/user', ['name' => 'Sally']);

        // $response
        //     ->assertStatus(201)
        //     ->assertJsonPath('team.owner.name', 'Darian');



        // $response = $this->getJson('/users/1');

        // $response
        //     ->assertJson(
        //         fn (AssertableJson $json) =>
        //         $json->where('id', 1)
        //             ->where('name', 'Victoria Faith')
        //             ->where('email', fn (string $email) => str($email)->is('[email protected]'))
        //             ->whereNot('status', 'pending')
        //             ->missing('password')
        //             ->etc()
        //     );
    }
}
