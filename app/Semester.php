<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Subject;

class Semester extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = [
        'semester',
    ];


    public function Subjects(){
    	return $this->hasMany('App\Subject');
    }
}
