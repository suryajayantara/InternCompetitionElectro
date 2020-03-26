<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\FilmPendek;

class FilmPendekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('filmpendek/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('filmpendek/register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // CheckData 
        $checkData = FilmPendek::where('nim',$request->nim)->count();
        if($checkData > 0){
            $error = "Maaf , Data Sudah Ada";
            return redirect()->back()->withErrors($error);
        }
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
        unique:instalasi_penerangas,nama|
        unique:film_pendeks,nama|
        unique:film_pendeks,nama1|
        unique:film_pendeks,nama2|
        unique:film_pendeks,nama3|
        unique:film_pendeks,nama4|
        unique:film_pendeks,nama5|
        unique:desain_posters,nama|
        unique:l_k_c_t_s,nama|";

        $no_allow_nim = "
        unique:mobile_legends,nim_1|
        unique:mobile_legends,nim_2|
        unique:mobile_legends,nim_3|
        unique:mobile_legends,nim_4|
        unique:mobile_legends,nim_5|
        unique:p_l_c_s,nim_1|
        unique:p_l_c_s,nim_2|
        unique:instalasi_penerangas,nim|
        unique:film_pendeks,nim|
        unique:film_pendeks,nim1|
        unique:film_pendeks,nim2|
        unique:film_pendeks,nim3|
        unique:film_pendeks,nim4|
        unique:film_pendeks,nim5|
        unique:desain_posters,nim|
        unique:l_k_c_t_s,nim|";

        // Validate Data 
        $this->validate($request,[
            'nama' => 'required|string|min:3|'.$no_allow_nama,
            'nim' => 'required|min:3'.$no_allow_nim,
            'id_line' => "required|min:3",
            'kelas' => "required",
            'no_telpon' => "required",
            'konsumsi' => "required",
            'prodi' => "required",
            'semester' => "required",
            'nama1' => 'required|'.$no_allow_nama,
            'nim1' => 'required|'.$no_allow_nim,
            'nama2' => 'required|'.$no_allow_nama,
            'nim2' => 'required|'.$no_allow_nim,
            'nama3' => 'required|'.$no_allow_nama,
            'nim3' => 'required|'.$no_allow_nim,
            'nama4' => $no_allow_nama,
            'nim4' => $no_allow_nim,
        ],[
            'string' => ':attribute Harus Berupa Huruf !',
            'min' => ':attribute Minimal 3 Karakter !',
            'required' => ':attribute Harus Diisi  !',
            'unique' => 'Maaf, :attribute Sudah terdaftar di cabang ini / lomba lain ',
        ]);
        // Insert Data Try
        try {
            $query = FilmPendek::create([
                'nama' => $request->nama,
                'nim' => $request->nim,
                'kelas' => $kelas,
                'no_telpon' => $no_telpon,
                'konsumsi' => $request->konsumsi,
                'prodi' => $prodi,
                'semester' => $request->semester,
                'id_line' => $request->id_line,
                'nama1' => $request->nama1,
                'nim1' => $request->nim1,
                'nama2' => $request->nama2,
                'nim2' => $request->nim2,
                'nama3' => $request->nama3,
                'nim3' => $request->nim3,
                'nama4' => $request->nama4,
                'nim4' => $request->nim4,
                'status_bayat' => "Belum Lunas",
            ]);
            if($query){
                return view('success')->with([
                    'title' => "Short Movie",
                    'desc' => "Wujudkan Kreativitas Melalui Rangkaian Gambar !",
                    'request' => $request,
                    'lomba' => "Film Pendek"
                ]);
            }
        } catch (\Throwable $th) {
            return redirect()->back();
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
