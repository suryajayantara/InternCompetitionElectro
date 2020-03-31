<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function question(Request $req)
    {
        $data = "Halo , Nama Saya $req->nama, Prodi $req->prodi , Kelas $req->kelas Dan Cabang Lomba $req->cabanglomba. Bertanya soal $req->pertanyaan";
        return redirect("https://api.whatsapp.com/send?phone=6281236698825&text=$data");
    }
}
