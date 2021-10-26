<?php

namespace App\Models;

use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Parents extends Model
{
    use HasFactory;
    protected $table='parents';
    protected $fillable=['id',
                         'parent_name',
                         'parent_mobile',
                         'parent_address' 
                        ];
    public function student(){
        return $this->belongsToMany(Student::class,'map_table','parent_id','student_id');
    }
}