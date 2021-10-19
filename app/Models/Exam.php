<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Exam extends Model
{
    use HasFactory;
    protected $guarded = ['id','created_at','updated_at'];


    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function users(){

        return $this->belongsToMany(User::class);
    }

    public function name(){
        if(App::getLocale()=='en'){
            return json_decode($this->name)->en;
        }
        return json_decode($this->name)->ar;


    }

    public function desc(){
        if(App::getLocale()=='en'){
            return json_decode($this->name)->en;
        }
        return json_decode($this->desc)->ar;


    }





}
