<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->text("name");
            $table->text("desc");
            $table->string("img",50);
            $table->boolean("active")->default(true);
            $table->foreignId("skill_id")->constrained("skills");
            $table->tinyInteger("Question_no");
            $table->tinyInteger("difficulty");
            $table->tinyInteger("duration_in_minutes");
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
        Schema::dropIfExists('exams');
    }
}
