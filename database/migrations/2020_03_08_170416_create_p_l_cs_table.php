<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePLCsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p_l_c_s', function (Blueprint $table) {
            $table->increments('id');
            // Peserta 1
            $table->string('nama_1',60);
            $table->string('nim_1',15);
            $table->enum('semester_1',[2,4,6]);
            $table->string('kelas_1',10);
            $table->string('no_telpon_1',15);
            $table->string('id_line_1',50);
            $table->enum('prodi_1',["Manajemen Informatika","Teknik Otomasi","Teknik Listrik"]);
            // Peserta 2
            $table->string('nama_2',60);
            $table->string('nim_2',15);
            $table->string('kelas_2',10);
            $table->enum('semester_2',[2,4,6]);
            $table->string('no_telpon_2',15);
            $table->string('id_line_2',50);
            $table->enum('prodi_2',["Manajemen Informatika","Teknik Otomasi","Teknik Listrik"]);
            // General Data
            $table->enum('konsumsi',["vegetarian","non-vegetarian"]);
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
        Schema::dropIfExists('p_l_c_s');
    }
}
