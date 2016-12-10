<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserCanAddCareersTest extends TestCase
{
	use DatabaseMigrations;
    /**
     * Test that add a new career.
     *@test
     * @return void
     */
    public function UserCanAddCareers()
    {
        $this->visit('/admin/career/create')
        		 ->see('Agregar Carrera')
        		 ->type('Ingenieria en Telematica', 'name')
        		 ->press('Agregar')
        		 ->seePageIs('/admin/career')
        		 ->see('Ingenieria en Telematica');
    }
}
