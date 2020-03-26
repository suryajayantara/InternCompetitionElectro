<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobileLegendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobile_legends', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_1',60);
            $table->string('nim_1',15);
            $table->string('nama_2',60);
            $table->string('nim_2',15);
            $table->string('nama_3',60);
            $table->string('nim_3',15);
            $table->string('nama_4',60);
            $table->string('nim_4',15);
            $table->string('nama_5',60);
            $table->string('nim_5',15);
            $table->string('id_game_1',15);
            $table->string('id_game_2',15);
            $table->string('id_game_3',15);
            $table->string('id_game_4',15);
            $table->string('id_game_5',15);
            $table->string('kelas',10);
            $table->string('nama_team',50)->unique();
            $table->string('alamat',50)->default("");
            $table->string('no_telpon',15);
            $table->enum('konsumsi',["vegetarian","non-vegetarian"]);
            $table->enum('prodi',["Manajemen Informatika","Teknik Otomasi","Teknik Listrik"]);
            $table->enum('semester',[2,4,6]);
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
        Schema::dropIfExists('mobile_legends');
    }
}
