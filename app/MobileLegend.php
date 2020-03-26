<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MobileLegend extends Model
{
    protected $fillable = [ 'nama_1','nim_1','id_game_1',
                            'nama_2','nim_2','id_game_2',
                            'nama_3','nim_3','id_game_3',
                            'nama_4','nim_4','id_game_4',
                            'nama_5','nim_5','id_game_5',
                            'kelas',
                            'nama_team',
                            'no_telpon',
                            'konsumsi',
                            'prodi',
                            'semester',
                            'alamat',
                            'status_bayar'];
}
