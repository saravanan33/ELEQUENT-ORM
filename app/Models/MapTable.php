<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MapTable extends Model
{
    use HasFactory;
    protected $table='map_table';
    protected $fillable=['id',
                         'parent_id',
                         'student_id', 
                        ];
}
