<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UsersCanSeeMainPageTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic test example.
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
     * A basic test example.
     * @test
     * @return void
     */
    public function OnlyAdminCanVisitAdminSection(){
        $user = factory(App\User::class)->create(['role' => 'Member']);

        $this->actingAs($user)
             ->visit('/admin/career')
             ->seePageIs('/');
    }
}
