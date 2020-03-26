<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MobileLegend;

class MobileLegendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mobilelegend/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mobilelegend/register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // Classroom Convert
         $kelas = $request->semester."-".$request->prodi."-".$request->kelas;
         // Prodi Case
         switch ($request->prodi) {
             case 'mi':
                 $prodi = "Manajemen Informatika";
                 break;
             case 'to':
                 $prodi = "Teknik Otomasi";
                 break;
             case 'tl':
                 $prodi = "Teknik Listrik";
                 break;
             default:
                 "nothing";
                 break;
         }
 
         // Phone Validation
         $no_telpon = substr($request->no_telpon,1);
 
        //  One Person Only Can Register 1 Championship
        $no_allow_nama = "
        unique:mobile_legends,nama_1|
        unique:mobile_legends,nama_2|
        unique:mobile_legends,nama_3|
        unique:mobile_legends,nama_4|
        unique:mobile_legends,nama_5|
        unique:p_l_c_s,nama_1|
        unique:p_l_c_s,nama_2|
        unique:instalasi_penerangans,nama|
        unique:film_pendeks,nama|
        unique:desain_posters,nama|
        unique:l_k_c_t_s,nama_1|
        unique:l_k_c_t_s,nama_2|
        unique:l_k_c_t_s,nama_3|
        unique:p_u_b_g_s,nama_1|
        unique:p_u_b_g_s,nama_2|
        unique:p_u_b_g_s,nama_3|
        unique:p_u_b_g_s,nama_4|";

        $no_allow_nim = "
        unique:mobile_legends,nim_1|
        unique:mobile_legends,nim_2|
        unique:mobile_legends,nim_3|
        unique:mobile_legends,nim_4|
        unique:mobile_legends,nim_5|
        unique:p_l_c_s,nim_1|
        unique:p_l_c_s,nim_2|
        unique:instalasi_penerangans,nim|
        unique:film_pendeks,nim|
        unique:desain_posters,nim|
        unique:l_k_c_t_s,nim_1|
        unique:l_k_c_t_s,nim_2|
        unique:l_k_c_t_s,nim_3|
        unique:p_u_b_g_s,nim_1|
        unique:p_u_b_g_s,nim_2|
        unique:p_u_b_g_s,nim_3|
        unique:p_u_b_g_s,nim_4|";
         

         // Validate Data 
         $this->validate($request,[
             'nama1' => "required|string|min:3|" . $no_allow_nama,
             'nim1' => "required|min:3|".$no_allow_nim,
             'idgame1' => "required|min:3",
             'nama2' => "required|string|min:3|" . $no_allow_nama,
             'nim2' => "required|min:3|".$no_allow_nim,
             'idgame2' => "required|min:3",
             'nama3' => "required|string|min:3|" . $no_allow_nama,
             'nim3' => "required|min:3|".$no_allow_nim,
             'idgame3' => "required|min:3",
             'nama4' => "required|string|min:3|" . $no_allow_nama,
             'nim4' => "required|min:3|".$no_allow_nim,
             'idgame4' => "required|min:3",
             'nama5' => "required|string|min:3|" . $no_allow_nama,
             'nim5' => "required|min:3|".$no_allow_nim,
             'idgame5' => "required|min:3",
             'kelas' => "required|unique:mobile_legends,kelas",
             'nama_team' => "required|unique:mobile_legends,nama_team|",
             'alamat' => "required",
             'no_telpon' => "required",
             'konsumsi' => "required",
             'prodi' => "required",
             'semester' => "required",
         ],[
             'string' => ':attribute Harus Berupa Huruf !',
             'min' => ':attribute Minimal 3 Karakter !',
             'required' => ':attribute Harus Diisi  !',
             'unique' => 'Maaf, :attribute Sudah terdaftar di cabang ini / lomba lain ',
         ]);
         // Insert Data Try
         try {
             $query = MobileLegend::create([
                 'nama_1' => $request->nama1,
                 'nim_1' => $request->nim1,
                 'id_game_1' => $request->idgame1,
                 'nama_2' => $request->nama2,
                 'nim_2' => $request->nim2,
                 'id_game_2' => $request->idgame2,
                 'nama_3' => $request->nama3,
                 'nim_3' => $request->nim3,
                 'id_game_3' => $request->idgame3,
                 'nama_4' => $request->nama4,
                 'nim_4' => $request->nim4,
                 'id_game_4' => $request->idgame4,
                 'nama_5' => $request->nama5,
                 'nim_5' => $request->nim5,
                 'id_game_5' => $request->idgame5,
                 'nama_6' => $request->nama6,
                 'nim_6' => $request->nim6,
                 'id_game_6' => $request->idgame6,
                 'kelas' => $kelas,
                 'nama_team' => $request->nama_team,
                 'no_telpon' => $no_telpon,
                 'konsumsi' => $request->konsumsi,
                 'prodi' => $prodi,
                 'alamat' => $request->alamat,
                 'semester' => $request->semester,
                 'status_bayar' => "Belum Lunas"
             ]);
             if($query){
                 return view('success')->with([
                     'title' => "Mobile Legend",
                     'desc' => "Rules bla bla bla",
                     'request' => $request,
                     'lomba' => "Mobile Legend"
                 ]);
             }
         } catch (Exception $th) {
            report($th);
            return false;
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
