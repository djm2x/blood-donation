<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('imageUrl');
            $table->timestamps();
        });

        DB::insert("INSERT INTO `regions` (`id`, `name`, `imageUrl`, `created_at`, `updated_at`) VALUES
            (1, 'Béni Mellal- Khénifra', 'Béni Mellal- Khénifra.jpg', '2019-06-27 12:23:57', '2019-06-27 12:23:57'),
            (2, 'Casablanca- Settat', 'Casablanca- Settat.jpg', '2019-06-27 12:23:57', '2019-06-27 12:23:57'),
            (3, 'Dakhla-Oued Eddahab', 'Dakhla-Oued Eddahab.jpg', '2019-06-27 12:23:57', '2019-06-27 12:23:57'),
            (4, 'Darâa - Tafilalet', 'Darâa - Tafilalet.jpg', '2019-06-27 12:23:57', '2019-06-27 12:23:57'),
            (5, 'Fès - Meknès', 'Fès - Meknès.jpg', '2019-06-27 12:23:57', '2019-06-27 12:23:57'),
            (6, 'Guelmim - Oued Noun', 'Guelmim - Oued Noun.jpg', '2019-06-27 12:23:57', '2019-06-27 12:23:57'),
            (7, 'Laâyoune - Sakia El Hamra', 'Laâyoune - Sakia El Hamra.jpg', '2019-06-27 12:23:57', '2019-06-27 12:23:57'),
            (8, 'Marrakech - Safi', 'Marrakech - Safi.jpg', '2019-06-27 12:23:57', '2019-06-27 12:23:57'),
            (9, 'Oujda-Angad', 'Oujda-Angad.jpg', '2019-06-27 12:23:57', '2019-06-27 12:23:57'),
            (10, 'Rabat - Salé- Kénitra', 'Rabat - Salé- Kénitra.jpg', '2019-06-27 12:23:57', '2019-06-27 12:23:57'),
            (11, 'Souss - Massa', 'Souss - Massa.jpg', '2019-06-27 12:23:57', '2019-06-27 12:23:57'),
            (12, 'Tanger – Tétouan – Al Hoceima', 'Tanger – Tétouan – Al Hoceima.jpg', '2019-06-27 12:23:57', '2019-06-27 12:23:57')
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regions');
    }
}
