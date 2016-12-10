<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserCanAddSubjectsTest extends TestCase
{
	use DatabaseMigrations;
    /**
     * A basic test example.
     *@test
     * @return void
     */
    public function UserShouldSeeTheSubjectAfterCreated()
    {
        $careers = App\Career::create(['name' => 'Ing en Telematica']);
        $semester = App\Semester::create(['semester' => '3']);
        $this->visit('admin/subject/create')
        		 ->see('Agregar materias')
        		 ->select('1', 'career_id')
        		 ->type('Ecuaciones Diferenciales','name')
        		 ->type('Adriana','teacher')
        		 ->select('1', 'semester_id')
        		 ->press('Guardar')
        		 ->seePageIs('admin/subject')
                 ->see('Ecuaciones Diferenciales')
        		 ->see('Ing en Telematica')
                 ->see('3')
                 ->see('Adriana');
    }
}
