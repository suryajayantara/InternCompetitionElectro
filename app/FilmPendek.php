<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FilmPendek extends Model
{
    protected $fillable = 
    ['nama','nim',
    'kelas',
    'no_telpon',
    'konsumsi',
    'prodi',
    'semester',
    'id_line',
    'nama1',
    'nim1',
    'nama2',
    'nim2',
    'nama3',
    'nim3',
    'nama4',
    'nim4',
    'status_bayar'];
}
