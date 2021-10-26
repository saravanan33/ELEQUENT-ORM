<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;
    protected $table='schools';
    protected $fillable=['student_id',
                         'school_name',
                         'school_code',
                         'school_address' 
                        ];
    public function getBelongTo(){
        return $this->hasMany(Student::class,'school_id','id');
    }
}
