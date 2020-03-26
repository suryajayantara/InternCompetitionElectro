<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DesainPoster extends Model
{
    protected $fillable = ['nama','nim','kelas','no_telpon','konsumsi','prodi','semester','id_line','status_bayar'];
}
