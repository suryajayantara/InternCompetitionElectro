<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// App Models
use App\LKCT;

class LKCTController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('lkct/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lkct/register');
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
            'nama1' => "required|string|min:3|".$no_allow_nama,
            'nim1' => "required|min:3|".$no_allow_nim,
            'nama2' => "required|string|min:3|".$no_allow_nama,
            'nim2' => "required|min:3|".$no_allow_nim,
            'nama3' => "required|string|min:3".$no_allow_nama,
            'nim3' => "required|min:3".$no_allow_nim,
            'id_line' => "required|min:3",
            'kelas' => "required",
            'no_telpon' => "required",
            'konsumsi' => "required",
            'prodi' => "required",
            'semester' => "required",
        ],[
            'string' => ':attribute Harus Berupa Huruf !',
            'min' => ':attribute Minimal 3 Karakter !',
            'required' => ':attribute Harus Diisi  !',
        ]);
        // Insert Data Try
        try {
            $query = LKCT::create([
                'nama_1' => $request->nama1,
                'nim_1' => $request->nim1,
                'nama_2' => $request->nama2,
                'nim_2' => $request->nim2,
                'nama_3' => $request->nama3,
                'nim_3' => $request->nim3,
                'kelas' => $kelas,
                'no_telpon' => $no_telpon,
                'konsumsi' => $request->konsumsi,
                'prodi' => $prodi,
                'semester' => $request->semester,
                'id_line' => $request->id_line,
                'status_bayar' => "Belum Lunas"
            ]);
            if($query){
                return view('success')->with([
                    'title' => "Lomba Cipta Karya Teknologi",
                    'desc' => "Ubah Dunia Dengan Ide Cemerlangmu !",
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
