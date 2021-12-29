<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LHUClass extends Model
{
    use HasFactory;
    protected $table="classes";
    protected $fillable=[
        'department',
        'classname',
        'grede',
        'classroom',
        'teacher'
    ];
    public function student(){
        return $this->belongsTo('App\Models\Student','cid');
    }
}
