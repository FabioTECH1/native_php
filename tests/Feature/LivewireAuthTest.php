<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class LivewireAuthTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function test_login_page_contains_livewire_component()
    {
        $this->get('/login')
            ->assertSeeLivewire('auth.login');
    }

    /** @test */
    public function test_registration_page_contains_livewire_component()
    {
        $this->get('/register')
            ->assertSeeLivewire('auth.register');
    }

    /** @test */
    public function test_user_can_login_using_livewire()
    {
        $user = User::factory()->create([
            'password' => bcrypt('password123'),
        ]);

        Livewire::test('auth.login')
            ->set('email', $user->email)
            ->set('password', 'password123')
            ->call('login')
            ->assertRedirect('/');

        $this->assertAuthenticatedAs($user);
    }

    /** @test */
    public function test_user_can_register_using_livewire()
    {
        Livewire::test('auth.register')
            ->set('name', 'Test User')
            ->set('email', 'test@example.com')
            ->set('password', 'password123')
            ->set('password_confirmation', 'password123')
            ->call('register')
            ->assertRedirect('/');

        $this->assertDatabaseHas('users', [
            'email' => 'test@example.com',
        ]);
    }
}
