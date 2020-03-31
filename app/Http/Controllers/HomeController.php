<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Request To Eloquent
use App\DesainPoster;
use App\FilmPendek;
use App\InstalasiPenerangan;
use App\LKCT;
use App\MobileLegend;
use App\PLC;
use App\PUBG;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard/index');
    }

    // Dashboar Page Function

    // DesainPoster
    public function desainPosterView(){
        $data = DesainPoster::paginate(25);
        return view('dashboard/desainposter')->with([
            'datas' => $data
        ]);
    }

    // PUBG 
    public function PUBGView(){
        $data = PUBG::paginate(2);
        return view('dashboard/pubg')->with([
            'datas' => $data
        ]);
    }

    // LKCT
    public function LKCTView(){
        $data = LKCT::paginate(2);
        return view('dashboard/lkct')->with([
            'datas' => $data
        ]);
    }

    // PLC
    public function PLCView(){
        $data = PLC::paginate(2);
        return view('dashboard/plc')->with([
            'datas' => $data
        ]);
    }

    // Short Movie
    public function filmPendekView(){
        $data = FilmPendek::paginate(2);
        return view('dashboard/filmpendek')->with([
            'datas' => $data
        ]);
    }

     // Mobile Legend
    public function MLView(){
        $data = MobileLegend::paginate(2);
        return view('dashboard/ml')->with([
            'datas' => $data
        ]);
    }

    // Mobile Legend
    public function instalasiPeneranganView(){
       $data = InstalasiPenerangan::paginate(20);
            return view('dashboard/instalasipenerangan')->with([
            'datas' => $data
        ]);
    }
    


    
}
