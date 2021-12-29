<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('student_id')->comment('學號');
            $table->tinyInteger('seat_number')->unsigned()->comment('座號');
            $table->string('name')->comment('姓名');
            $table->string('gender')->comment('性別');
            $table->unsignedBigInteger('cid')->unsigned()->comment('班級');
            $table->date('graduation_date')->comment('畢業年份');
            $table->date('start_date')->comment('入學年份');
            $table->string('seat')->comment('座位');
            $table->string('country')->comment('出生地');
            $table->timestamps();
            $table->foreign('cid')->references('id')->on('classes')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
