<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
<<<<<<< HEAD
            $table->string('description');
            $table->integer('author_id');
            $table->boolean('is_urgent'); //0 today
            $table->boolean('is_done');
            $table->integer('developer_id')->nullable();
            $table->string('additional_info')->nullable();
            $table->string('file_path')->nullable();
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->nullable();
=======
            $table->string('task_description');
            $table->integer('task_author_id');
            $table->string('additional_info')->nullable();
            $table->boolean('is_urgent')->nullable();
            $table->boolean('for_today')->nullable();
            $table->integer('current_contractor');
            $table->boolean('is_done')->nullable();
            $table->integer('done_by')->nullable();
            $table->timestamp('created_at');
            $table->timestamp('closed_at')->nullable();
>>>>>>> 28c13ecc60d20bc1514693c719585652efc161b3
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
