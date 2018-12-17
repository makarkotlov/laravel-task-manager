<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
<<<<<<< HEAD
            $table->string('name');
=======
            $table->string('user_name');
>>>>>>> 28c13ecc60d20bc1514693c719585652efc161b3
            $table->string('last_name');
            $table->string('patronymic')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone_number');
            $table->string('password');
            $table->rememberToken();
            $table->integer('department_id')->nullable();
<<<<<<< HEAD
            $table->boolean('is_admin');
=======
            $table->boolean('is_task_author')->nullable();
>>>>>>> 28c13ecc60d20bc1514693c719585652efc161b3
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
