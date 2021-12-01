<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('students')->insert([
            'department'=>'文',
            'classname'=>'A班',
            'grade'=>1,
            'classroom'=> 'C101',
            'teacher'=>'羅慧君',
            'created_at'=>'2001-12-13',
            'updated_at'=>'2020-05-06',
            ]);
    }
}
