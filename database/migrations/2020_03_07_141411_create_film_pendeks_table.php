<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmPendeksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('film_pendeks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama',60);
            $table->string('nim',15);
            $table->string('kelas',10);
            $table->string('no_telpon',15);
            $table->string('id_line',50);
            $table->enum('konsumsi',["vegetarian","non-vegetarian"]);
            $table->enum('prodi',["Manajemen Informatika","Teknik Otomasi","Teknik Listrik"]);
            $table->enum('semester',[2,4,6]);
            $table->string('nama1',60);
            $table->string('nim1',15);
            $table->string('nama2',60);
            $table->string('nim2',15);
            $table->string('nama3',60);
            $table->string('nim3',15);
            $table->string('nama4',60);
            $table->string('nim4',15);
            $table->enum('status_bayar',["Lunas","Belum Lunas"]);
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
        Schema::dropIfExists('film_pendeks');
    }
}
