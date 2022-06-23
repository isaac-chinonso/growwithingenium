<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lesson_tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->bigInteger('lesson_id')->unsigned();
            $table->string('source');
            $table->boolean('status');
            $table->timestamps();
            $table->foreign('lesson_id')->references('id')->on('lessons')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lesson_tasks');
    }
}
