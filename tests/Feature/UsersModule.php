<?php

namespace Tests\Feature;

use App\User;
    use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UsersModule extends TestCase
{

    use RefreshDatabase;

    /** @test * */
    function listUsers()
    {

        // Normal
        factory(User::class)->create([
            'name' => 'Andres'
        ]);
        factory(User::class)->create([
            'name' => 'isabel'
        ]);

        $this->get('/users')
            ->assertStatus(200)
            ->assertSee('Andres')
            ->assertSee('isabel')
        ;

    }

    /** @test */
    function it_shows_a_default_message_if_the_users_list_is_empty()
    {
//        DB::table('users')->truncate();

        $this->get('/users')
            ->assertStatus(200)
            ->assertSee('No hay usuarios registrados');
    }

    /**  @test * */
    function show_details_user()
    {

        $this->get('/users/2')
            ->assertStatus(200)
            ->assertSee('isabela')
        ;
    }
}
