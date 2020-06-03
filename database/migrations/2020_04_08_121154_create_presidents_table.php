<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreatePresidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presidents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('titleAr');
            $table->string('description')->nullable(true);
            $table->string('descriptionAr')->nullable(true);
            $table->dateTime('date')->nullable(true);
            $table->string('imageUrl');

            // $table->integer('idRegion')->nullable(true);

            // $table->unsignedBigInteger('idUser');
            // $table->foreign('idUser')->references('id')->on('users');

            $table->timestamps();
        });

        DB::insert("INSERT INTO `presidents` (`id`, `title`, `description`, `date`, `imageUrl`, `created_at`, `updated_at`) VALUES
            (1,
            'Mot du Président',
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod &#10;tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim &#10;veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea &#10;commodo consequat. Duis aute irure dolor in reprehenderit in voluptate &#10;velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint &#10;occaecat cupidatat non proident, sunt in culpa qui officia deserunt &#10;mollit anim id est laborum.',
            '2019-06-27 12:23:57',
            '1584718739196_e85ce38eb824c91186f81ae81f264496.jpg;',
            '2019-06-27 12:23:57',
            '2019-06-27 12:23:57'
            )
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presidents');
    }
}
