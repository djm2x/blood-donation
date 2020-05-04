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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable(true);
            $table->string('phone');
            // $table->string('remember_token');
            $table->string('password');
            $table->string('role');
            $table->rememberToken()->nullable(true);

            $table->unsignedBigInteger('idRegion')->nullable(true);
            $table->foreign('idRegion')->references('id')->on('regions');

            $table->timestamps();
        });

        DB::insert("INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `phone`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
        (1, 'admin', 'admin@gmail.com', NULL, '0537255578', '123', 'admin', NULL, '2019-06-27 12:23:57', '2019-06-27 12:23:57')
        ");
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
