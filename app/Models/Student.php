<?php

namespace App\Models;

use App\Models\School;
use App\Models\Parents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;
    // protected $table='Students';
    // protected $fillable=['name',
    //                      'email',
    //                      'class'];
    public function getSchool(){
        return $this->belongsTo(School::class,'school_id','id');
    }
    public function parent(){
        return $this->belongsToMany(Parents::class,'map_table','student_id','parent_id');
    }
}
