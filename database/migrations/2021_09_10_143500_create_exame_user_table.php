<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExameUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exame_user', function (Blueprint $table) {

            $table->id();
            $table->foreignId("exam_id")->constrained();
             $table->foreignId("user_id")->constrained();
           
             $table->smallInteger("time_mins");
             $table->enum("status",["opened","closed"]);
             $table->float("score",5,2);
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
        Schema::dropIfExists('exame_user');
    }
}
