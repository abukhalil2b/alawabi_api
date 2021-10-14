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
            $table->string('url')->nullable();
            $table->string('content');
            $table->string('op1');
            $table->string('op2');
            $table->string('op3');
            $table->string('answer');
            $table->integer('questiongroup_id');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
