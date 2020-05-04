<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('description');
            $table->dateTime('date');
            $table->string('imageUrl');
            // not a foreign key
            $table->integer('idRegion');

            $table->unsignedBigInteger('idUser');
            $table->foreign('idUser')->references('id')->on('users');
            $table->timestamps();
        });

        DB::insert("INSERT INTO `activites` (`id`, `title`,`imageUrl`, `description`,`idRegion`,`idUser`, `date`,`created_at`, `updated_at`) VALUES
            (1, 'activites 1', 'imageUrl', '<p>You can use the mark tag to <mark>highlight</mark> text.</p>', 1, 1, '2019-06-27 12:23:57', '2019-06-27 12:23:57', '2019-06-27 12:23:57'),
            (2, 'activites 2', 'imageUrl', 'Stylized implementation of HTML’s <abbr> element for abbreviations and acronyms to show the expanded version on hover.', 2, 1,  '2019-06-27 12:23:57', '2019-06-27 12:23:57', '2019-06-27 12:23:57'),
            (3, 'activites 3', 'imageUrl', 'For quoting blocks of content from another source within your document. Wrap <blockquote> around any HTML as the quote.', 3, 1,  '2019-06-27 12:23:57', '2019-06-27 12:23:57', '2019-06-27 12:23:57')
        ");
    }




    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activites');
    }
}
