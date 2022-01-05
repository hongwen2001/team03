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
        'grede',
        'classroom',
        'teacher'
    ];
    public function student(){
        return $this->hasMany('App\Models\Student','cid');
    }
}
