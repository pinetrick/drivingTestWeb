<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('icon')->nullable();
            $table->string('phone')->nullable();
            $table->string('language')->default("");
            $table->string('version_code')->default("");
            $table->string('user_identity')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->bigInteger('has_ad')->default(1);
            $table->bigInteger('enable_prone')->default(0);
            $table->bigInteger('enable_private_question')->default(0);
            $table->bigInteger('coin')->default(0);
            $table->date('last_daily_sign_in')->default("20191029");
            $table->string('last_ip')->default("0.0.0.0");
            $table->dateTime('last_login_time')->default("2019-1-1 12:00:00");
            $table->rememberToken()->nullable();
            $table->timestamps();
            $table->softDeletes();
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
