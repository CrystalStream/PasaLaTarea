<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Career;
use App\Semester;

class Subject extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'teacher', 'career_id','semester_id',
    ];


    public function Career(){
    	return $this->belongsTo('App\Career');
    }

    public function Semester(){
    	return $this->belongsTo('App\Semester');
    }
}
