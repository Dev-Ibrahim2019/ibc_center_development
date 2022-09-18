<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_ar');
            $table->string('course_en');
            $table->string('course_image');
            $table->date('start_at');
            $table->double('price');
            $table->string('instructor_en');
            $table->string('instructor_ar');
            $table->string('instructor_image');
            $table->string('status');
            $table->text('topics_ar')->nullable();
            $table->text('topics_en')->nullable();
            $table->text('objectives_en')->nullable();
            $table->text('objectives_ar')->nullable();
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
        Schema::dropIfExists('courses');
    }
};
