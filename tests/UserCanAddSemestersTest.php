<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserCanAddSemestersTest extends TestCase
{
		use DatabaseMigrations;
    /**
     * A basic test example.
     *@test
     * @return void
     */
    public function UserCanShouldSeeTheSemesterAfterCreate()
    {
        $this->visit('/admin/semester/create')
        		 ->see('Agregar Semestres')
        		 ->type('1','semester')
        		 ->press('Guardar')
        		 ->seePageIs('/admin/semester')
        		 ->see('1');
    }
}
