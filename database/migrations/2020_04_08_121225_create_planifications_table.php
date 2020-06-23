<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreatePlanificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planifications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('description');
            $table->dateTime('date');
            $table->string('imageUrl')->nullable(true);
            // not a foreign key
            $table->integer('idRegion');

            $table->unsignedBigInteger('idUser');
            $table->foreign('idUser')->references('id')->on('users');
            $table->timestamps();
        });

        DB::insert("INSERT INTO `planifications` (`id`, `title`,`imageUrl`, `description`,`idRegion`,`idUser`, `date`,`created_at`, `updated_at`) VALUES
            (1, 'Béni Mellal- Khénifra', 'Béni Mellal- Khénifra.jpg', 'description', 1, 1, '2019-06-27 12:23:57', '2019-06-27 12:23:57', '2019-06-27 12:23:57'),
            (2, 'Casablanca- Settat', 'Casablanca- Settat.jpg', 'description', 2, 1,  '2019-06-27 12:23:57', '2019-06-27 12:23:57', '2019-06-27 12:23:57'),
            (3, 'Dakhla-Oued Eddahab', 'Dakhla-Oued Eddahab.jpg', 'description', 3, 1,  '2019-06-27 12:23:57', '2019-06-27 12:23:57', '2019-06-27 12:23:57'),
            (4, 'Darâa - Tafilalet', 'Darâa - Tafilalet.jpg', 'description', 4, 1,  '2019-06-27 12:23:57', '2019-06-27 12:23:57', '2019-06-27 12:23:57'),
            (5, 'Fès - Meknès', 'Fès - Meknès.jpg', 'description', 5, 1,  '2019-06-27 12:23:57', '2019-06-27 12:23:57', '2019-06-27 12:23:57'),
            (6, 'Guelmim - Oued Noun', 'Guelmim - Oued Noun.jpg', 'description', 6, 1,  '2019-06-27 12:23:57', '2019-06-27 12:23:57', '2019-06-27 12:23:57'),
            (7, 'Laâyoune - Sakia El Hamra', 'Laâyoune - Sakia El Hamra.jpg', 'description', 7, 1,  '2019-06-27 12:23:57', '2019-06-27 12:23:57', '2019-06-27 12:23:57'),
            (8, 'Marrakech - Safi', 'Marrakech - Safi.jpg', 'description', 8, 1,  '2019-06-27 12:23:57', '2019-06-27 12:23:57', '2019-06-27 12:23:57'),
            (9, 'Oujda-Angad', 'Oujda-Angad.jpg', 'description', 9, 1,  '2019-06-27 12:23:57', '2019-06-27 12:23:57', '2019-06-27 12:23:57'),
            (10, 'Rabat - Salé- Kénitra', 'Rabat - Salé- Kénitra.jpg', 'description', 10, 1,  '2019-06-27 12:23:57', '2019-06-27 12:23:57', '2019-06-27 12:23:57'),
            (11, 'Souss - Massa', 'Souss - Massa.jpg', 'description', 11, 1,  '2019-06-27 12:23:57', '2019-06-27 12:23:57', '2019-06-27 12:23:57'),
            (12, 'Tanger – Tétouan – Al Hoceima', 'Tanger – Tétouan – Al Hoceima.jpg', 'description', 12, 1,  '2019-06-27 12:23:57', '2019-06-27 12:23:57', '2019-06-27 12:23:57')
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('planifications');
    }
}
