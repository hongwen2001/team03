<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LHUClass extends Model
{
    use HasFactory;
    protected $table="classes";
    protected $fillable=[
        'id',
        'department',
        'classname',
        'grade',
        'classroom',
        'teacher'
    ];
    public function students(){
        return $this->hasMany('App\Models\Student','cid','id');
    }
    public function scopeGrade_class($query,$grade){
        return $query->where('grade',$grade);
    }
    public function scopeGrade_students($query,$grade){
        $students=array();
        $classes=$query->where('grade',$grade)->get();
        foreach ($classes as $class) {
            $students[] = LHUClass::with('students')->find($class->id);
        }
        return $students;
    }
}
