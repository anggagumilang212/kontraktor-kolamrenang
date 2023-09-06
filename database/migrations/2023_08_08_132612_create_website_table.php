<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('website', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('judul_website');
            $table->longText('deskripsi');
            $table->string('no_telp');
            $table->string('email');
            $table->longText('alamat');
            $table->longText('google_map');
            $table->string('sosmed_fb');
            $table->string('sosmed_twitter');
            $table->string('sosmed_instagram');
            $table->string('sosmed_youtube');
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
        Schema::dropIfExists('website');
    }
}
