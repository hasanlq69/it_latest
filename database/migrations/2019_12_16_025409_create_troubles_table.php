<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTroublesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('troubles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('department');
            $table->string('trouble_type');
            $table->string('client_name');
            $table->string('trouble_name');
            $table->string('trouble_req');
            $table->dateTime('start');
            $table->dateTime('finish')->nullable();
            $table->string('cause')->nullable();
            $table->string('solution')->nullable();
            $table->text('note');
            $table->string('status');
            $table->string('file_1');
            $table->string('file_2');
            $table->string('file_3');
            $table->string('reporter');
            $table->string('problem_solver');
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
        Schema::dropIfExists('troubles');
    }
}
