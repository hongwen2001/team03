<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->id()->unsigned()->comment('編號');
            $table->string('department')->comment('系別');
            $table->string('classname')->comment('班級名稱');
            $table->integer('grade')->comment('年級');
            $table->string('classroom')->comment('教室');
            $table->string('teacher')->comment('班導');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classes');
    }
}
