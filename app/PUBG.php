<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PUBG extends Model
{
    protected $fillable = [
        'nama_team',
        'nama_1','nim_1','kelas_1','no_telpon_1','id_line_1','id_game_1','konsumsi_1','prodi_1','semester_1',
        'nama_2','nim_2','kelas_2','no_telpon_2','id_line_2','id_game_2','konsumsi_2','prodi_2','semester_2',
        'nama_3','nim_3','kelas_3','no_telpon_3','id_line_3','id_game_3','konsumsi_3','prodi_3','semester_3',
        'nama_4','nim_4','kelas_4','no_telpon_4','id_line_4','id_game_4','konsumsi_4','prodi_4','semester_4',
        'status_bayar'
    ];
}
