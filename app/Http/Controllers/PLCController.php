<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PLC;

class PLCController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('plc/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('plc/register');
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
        $kelas1 = $request->semester_1."-".$request->prodi_1."-".$request->kelas_1;
        $kelas2 = $request->semester_2."-".$request->prodi_2."-".$request->kelas_2;
        // Prodi Case
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
        // Phone Validation
        $no_telpon1 = substr($request->no_telpon1,1);
        $no_telpon2 = substr($request->no_telpon2,1);
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
            'nama1' => 'required|string|min:3|' . $no_allow_nama,
            'nim1' => 'required|min:3| '. $no_allow_nim,
            'id_line1' => "required|min:3",
            'kelas1' => "required",
            'no_telpon1' => "required",
            'prodi1' => "required",
            'semester1' => "required",
            'nama2' => 'required|string|min:3|' . $no_allow_nama,
            'nim2' => 'required|min:3|' . $no_allow_nim,
            'id_line2' => "required|min:3",
            'kelas2' => "required",
            'no_telpon2' => "required",
            'prodi2' => "required",
            'semester2' => "required",
            'konsumsi' => "required",
            
        ],[
            'string' => ':attribute Harus Berupa Huruf !',
            'min' => ':attribute Minimal 3 Karakter !',
            'required' => ':attribute Harus Diisi  !',
            'unique' => 'Maaf, :attribute Sudah terdaftar di cabang ini / lomba lain ',
        ]);
        // Insert Data Try
        try {
            $query = PLC::create([
                'nama_1' => $request->nama1,
                'nim_1' => $request->nim1,
                'kelas_1' => $kelas1,
                'no_telpon_1' => $no_telpon1,
                'prodi_1' => $prodi1,
                'semester_1' => $request->semester1,
                'id_line_1' => $request->id_line1,
                'nama_2' => $request->nama2,
                'nim_2' => $request->nim2,
                'kelas_2' => $kelas2,
                'no_telpon_2' => $no_telpon2,
                'prodi_2' => $prodi2,
                'semester_2' => $request->semester2,
                'id_line_2' => $request->id_line2,
                'konsumsi' => $request->konsumsi,
                'status_bayar' => "Belum Lunas"
            ]);
            if($query){
                return view('success')->with([
                    'title' => "Progammable Logic Controller",
                    'desc' => "Change the world with technologies !",
                    'request' => $request,
                    'lomba' => "Progammable Logic Controller"
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
