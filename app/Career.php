<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Subject;

class Career extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = [
        'name',
    ];


    public function Subjects(){
    	return $this->hasMany('App\Subject');
    }
}
