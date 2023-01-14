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
        Schema::create('tasks_notifies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('type');
            $table->integer('corpid');
            $table->integer('iscorp')->default(1);
            $table->integer('befor');
            $table->string('name');
            $table->string('number');
            $table->bigInteger('from');
            $table->bigInteger('user_id')->nullable();
            $table->date('issueAt');
            $table->date('exp');
            $table->integer('duration')->nullable();
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
        Schema::dropIfExists('tasks_notifies');
    }
};
