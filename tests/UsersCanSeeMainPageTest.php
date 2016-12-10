<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UsersCanSeeMainPageTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * Test to check if everything is okay
     * @test
     * @return void
     */
    public function VisitIndexPage()
    {
        $this->visit('/')
             ->see('Login')
             ->see('Registrate')
             ->click('Registrate')
             ->seePageIs('/register')
             ->click('Login')
             ->seePageIs('/login');

        $user = factory(App\User::class)->create(['role' => 'Member']);

        $this->actingAs($user)
             ->visit('/')
             ->see('Successfully logged in')
             ->click('Mi cuenta')
             ->see($user->name);
    }
    /**
     * Test to check if the middleware is working
     * @test
     * @return void
     */
    public function OnlyAdminCanVisitAdminSection(){
        $user = factory(App\User::class)->create(['role' => 'Member']);

        $this->actingAs($user)
             ->visit('/admin/career')
             ->seePageIs('/');
    }

    /**
     * Test that check the bounds of the user upon his role
     * @test
     * @return void
     */
    public function AdminCanNavigateThroughAll(){
        $user = factory(App\User::class)->create(['role' => 'Administrador']);

        $this->actingAs($user)
             ->visit('/admin/career/create')
             ->see('Agregar Carrera')
             ->seePageIs('/admin/career/create')
             ->visit('/')
             ->see($user->name)
             ->seePageIs('/');
    }
}
