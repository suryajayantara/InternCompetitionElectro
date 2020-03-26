<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePUBGsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p_u_b_g_s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_team',50);
            // Peserta 1
            $table->string('nama_1',60);
            $table->string('nim_1',15);
            $table->string('kelas_1',10);
            $table->string('no_telpon_1',15);
            $table->string('id_line_1',50);
            $table->string('id_game_1',50);
            $table->enum('konsumsi_1',["vegetarian","non-vegetarian"]);
            $table->enum('prodi_1',["Manajemen Informatika","Teknik Otomasi","Teknik Listrik"]);
            $table->enum('semester_1',[2,4,6]);

            // Peserta 2
            $table->string('nama_2',60);
            $table->string('nim_2',15);
            $table->string('kelas_2',10);
            $table->string('no_telpon_2',15);
            $table->string('id_line_2',50);
            $table->string('id_game_2',50);
            $table->enum('konsumsi_2',["vegetarian","non-vegetarian"]);
            $table->enum('prodi_2',["Manajemen Informatika","Teknik Otomasi","Teknik Listrik"]);
            $table->enum('semester_2',[2,4,6]);
            
            // Peserta 3
            $table->string('nama_3',60);
            $table->string('nim_3',15);
            $table->string('kelas_3',10);
            $table->string('no_telpon_3',15);
            $table->string('id_line_3',50);
            $table->string('id_game_3',50);
            $table->enum('konsumsi_3',["vegetarian","non-vegetarian"]);
            $table->enum('prodi_3',["Manajemen Informatika","Teknik Otomasi","Teknik Listrik"]);
            $table->enum('semester_3',[2,4,6]);

            // Peserta 4
            $table->string('nama_4',60);
            $table->string('nim_4',15);
            $table->string('kelas_4',10);
            $table->string('no_telpon_4',15);
            $table->string('id_line_4',50);
            $table->string('id_game_4',50);
            $table->enum('konsumsi_4',["vegetarian","non-vegetarian"]);
            $table->enum('prodi_4',["Manajemen Informatika","Teknik Otomasi","Teknik Listrik"]);
            $table->enum('semester_4',[2,4,6]);

            $table->enum('status_bayar',['Lunas','Belum Lunas']);            
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
        Schema::dropIfExists('p_u_b_gs');
    }
}
