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

    public function desainPosterView(){
        $data = DesainPoster::paginate(25);
        return view('dashboard/desainposter')->with([
            'data' => $data
        ]);
    }
}
