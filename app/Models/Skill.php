<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;


class Skill extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at','updated_at'];
    public function cat()
    {
        return $this->belongsTo(Cat::class);
    }
    public function exams()
    {
        return $this->hasMany(Exam::class);
    }


    public function name(){
        if(App::getLocale()=='en'){
            return json_decode($this->name)->en;
        }
        return json_decode($this->name)->ar;


    }
}
