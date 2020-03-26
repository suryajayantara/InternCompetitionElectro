<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PUBG;

class PUBGController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pubg/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pubg/register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // 1
        $kelas1 = $request->semester1."-".$request->prodi1."-".$request->kelas1;
        switch ($request->prodi1) {
            case 'mi':
                $prodi1 = "Manajemen Informatika";
                break;
            case 'to':
                $prodi1 = "Teknik Otomasi";
                break;
            case 'tl':
                $prodi1 = "Teknik Listrik";
                break;
            default:
                "nothing";
                break;
        }
        $no_telpon1 = substr($request->no_telpon1,1);

        // 2
        $kelas2 = $request->semester2."-".$request->prodi2."-".$request->kelas2;
        switch ($request->prodi2) {
            case 'mi':
                $prodi2 = "Manajemen Informatika";
                break;
            case 'to':
                $prodi2 = "Teknik Otomasi";
                break;
            case 'tl':
                $prodi2 = "Teknik Listrik";
                break;
            default:
                "nothing";
                break;
        }
        $no_telpon2 = substr($request->no_telpon,2);
        
        // 3
        $kelas3 = $request->semester3."-".$request->prodi3."-".$request->kelas3;
        switch ($request->prodi3) {
            case 'mi':
                $prodi3 = "Manajemen Informatika";
                break;
            case 'to':
                $prodi3 = "Teknik Otomasi";
                break;
            case 'tl':
                $prodi3 = "Teknik Listrik";
                break;
            default:
                "nothing";
                break;
        }
        $no_telpon3 = substr($request->no_telpon3,2);


        // 4
        $kelas4 = $request->semester4."-".$request->prodi4."-".$request->kelas4;
        switch ($request->prodi4) {
            case 'mi':
                $prodi4 = "Manajemen Informatika";
                break;
            case 'to':
                $prodi4 = "Teknik Otomasi";
                break;
            case 'tl':
                $prodi4 = "Teknik Listrik";
                break;
            default:
                "nothing";
                break;
        }
        $no_telpon4 = substr($request->no_telpon4,2);


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
            'namateam' => "required|string|min:3|unique:p_u_b_g_s,nama_team",
            // 1
            'nama1' => "required|string|min:3|".$no_allow_nama,
            'nim1' => "required|min:3|".$no_allow_nim,
            'id_line1' => "required|min:3",
            'kelas1' => "required",
            'no_telpon1' => "required",
            'konsumsi1' => "required",
            'prodi1' => "required",
            'semester1' => "required",
            'id_game1' => "required",
            // 2
            'nama2' => "required|string|min:3|".$no_allow_nama,
            'nim2' => "required|min:3|".$no_allow_nim,
            'id_line2' => "required|min:3",
            'kelas2' => "required",
            'no_telpon2' => "required",
            'konsumsi2' => "required",
            'prodi2' => "required",
            'semester2' => "required",
            'id_game2' => "required",
            // 3
            'nama3' => "required|string|min:3|".$no_allow_nama,
            'nim3' => "required|min:3|".$no_allow_nim,
            'id_line3' => "required|min:3",
            'kelas3' => "required",
            'no_telpon3' => "required",
            'konsumsi3' => "required",
            'prodi3' => "required",
            'semester3' => "required",
            'id_game3' => "required",
            // 4
            'nama4' => "required|string|min:3|".$no_allow_nama,
            'nim4' => "required|min:3|".$no_allow_nim,
            'id_line4' => "required|min:3",
            'kelas4' => "required",
            'no_telpon4' => "required",
            'konsumsi4' => "required",
            'prodi4' => "required",
            'semester4' => "required",
            'id_game4' => "required",
        ],[
            'string' => ':attribute Harus Berupa Huruf !',
            'min' => ':attribute Minimal 3 Karakter !',
            'required' => ':attribute Harus Diisi  !',
            'unique' => 'Maaf, :attribute Sudah terdaftar di cabang ini / lomba lain ',
        ]);
        // Insert Data Try
        try {
            $query = PUBG::create([
                'nama_team' => $request->namateam,
                // 1
                'nama_1' => $request->nama1,
                'nim_1' => $request->nim1,
                'kelas_1' => $kelas1,
                'no_telpon_1' => $no_telpon1,
                'konsumsi_1' => $request->konsumsi1,
                'prodi_1' => $prodi1,
                'semester_1' => $request->semester1,
                'id_line_1' => $request->id_line1,
                'id_game_1' => $request->id_game1,
                // 2
                'nama_2' => $request->nama2,
                'nim_2' => $request->nim2,
                'kelas_2' => $kelas2,
                'no_telpon_2' => $no_telpon2,
                'konsumsi_2' => $request->konsumsi2,
                'prodi_2' => $prodi2,
                'semester_2' => $request->semester2,
                'id_line_2' => $request->id_line2,
                'id_game_2' => $request->id_game2,
                // 3
                'nama_3' => $request->nama3,
                'nim_3' => $request->nim3,
                'kelas_3' => $kelas3,
                'no_telpon_3' => $no_telpon3,
                'konsumsi_3' => $request->konsumsi3,
                'prodi_3' => $prodi3,
                'semester_3' => $request->semester3,
                'id_line_3' => $request->id_line3,
                'id_game_3' => $request->id_game3,
                // 4
                'nama_4' => $request->nama4,
                'nim_4' => $request->nim4,
                'kelas_4' => $kelas4,
                'no_telpon_4' => $no_telpon4,
                'konsumsi_4' => $request->konsumsi4,
                'prodi_4' => $prodi4,
                'semester_4' => $request->semester4,
                'id_line_4' => $request->id_line4,
                'id_game_4' => $request->id_game4,
                // Status Bayar
                'status_bayar' => "Belum Lunas",
            ]);
            if($query){
                return view('success')->with([
                    'title' => "PUBG",
                    'desc' => "Winner Winner Chiken Dinner !",
                    'request' => $request,
                    'lomba' => "PUBG"
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
