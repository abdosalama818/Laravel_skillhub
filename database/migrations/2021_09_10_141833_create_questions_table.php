<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
             $table->text("title");
             $table->string("option1",255);
             $table->string("option2",255);
             $table->string("option3",255);
             $table->string("option4",255);
             $table->tinyInteger("rigth_answer");
             $table->foreignId("exam_id")->constrained("exams");

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
        Schema::dropIfExists('questions');
    }
}
