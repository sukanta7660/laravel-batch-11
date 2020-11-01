<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            // $table->datatype('column name',length);
            $table->string('name',150);
            $table->integer('stdID');
            $table->string('dept',50);
            $table->string('batch',25);
            $table->string('semester',20);
            $table->string('section',10);
            $table->double('result')->default(0);
            $table->date('dob');
            $table->softDeletes();
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
        Schema::dropIfExists('students');
    }
}
