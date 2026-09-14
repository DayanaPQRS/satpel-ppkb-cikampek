<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class ApiAuthTest extends TestCase
{
    use RefreshDatabase;

    public function test_api_login_returns_token_for_kader()
    {
        $user = User::factory()->create([
            'email' => 'kader@example.com',
            'password' => bcrypt('password'),
            'role' => 'kader',
        ]);

        $response = $this->postJson('/api/login', [
            'email' => 'kader@example.com',
            'password' => 'password',
        ]);

        $response->assertStatus(200)
                 ->assertJsonStructure(['access_token', 'user']);
    }

    public function test_api_me_endpoint_returns_user_data()
    {
        $user = User::factory()->create(['role' => 'kader']);
        
        // Sanctum allows setting the current authenticated user easily
        $response = $this->actingAs($user, 'sanctum')->getJson('/api/user');

        $response->assertStatus(200)
                 ->assertJsonPath('user.email', $user->email);
    }
}
