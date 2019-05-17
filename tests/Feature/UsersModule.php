<?php

namespace Tests\Feature;

    use Tests\TestCase;
    use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModule extends TestCase
{
    /**
     * A basic test example.
     * @test
     * @return void
     */
    function testBasicTest()
    {
        $this->get('/users')
        ->assertStatus(200)
            ->assertSee('Andres')
            ->assertSee('isabel')
        ;
        ;

    }

    /**
     * A basic test example.
     * @test
     * @return void
     */
    function listUsers()
    {
        $this->get('/users?empty')
            ->assertStatus(200)
            ->assertSee('No hay usuarios registrados')
        ;
        ;

    }

    /** @test **/
    function loginIndex(){
        $this->get('login')
            ->assertStatus(200)
            ->assertSee('Bienvenido');
        ;
    }

    /** @test **/
    function detailsUser(){
        $this->get('users/5')
            ->assertStatus(200)
            ->assertSee('Mostrando detalles del usuario: 5');
        ;
    }

    /** @test **/
    function notnickname(){
        $this->get('saludo/miguel')
            ->assertStatus(200)
            ->assertSee('No tiene usuario');
        ;
    }

    /** @test **/
    function nickname(){
        $this->get('saludo/miguel/mavs')
            ->assertStatus(200)
            ->assertSee('Miguel Tu usario: mavs');
        ;
    }

}
