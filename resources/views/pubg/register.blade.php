@extends('../master')

@section('body')

<section id="hero">
    <div id="particel.js">
      <div class="hero-container">
        <h1 class="mt-5">PUBG : MOBILE </h1>
        <h2> Winner Winner Chiken Dinner !</h2>
        <a href="#about" class="btn-get-started" data-toggle="modal" data-target="#staticBackdrop"> Daftar Sekarang ! </a>
      </div>
    </div>
  </section><!-- #hero -->
  
  <main id="main">
    <div class="container mb-5 " id="about">

      <div class="row">
        @if ($errors->any())
        <div class="alert alert-danger col-md-12" role="alert">
          <h1 class="text-center mb-3"> Perhatian !</h1>
            <ul>
              @foreach ($errors->all() as $error)
                  <li style="color:red !important; text-transform: capitalize;">{{ $error }}</li>
              @endforeach
            </ul>
        </div>
        @endif
        
      </div>
        <form action="/pubg/register/process" method="post">
        {{ csrf_field() }}
        <div class="row">
            <h1 class="ml-3">Form Pendaftaran</h1>

            {{-- Data --}}
            <div class="col-md-12">
              <div class="shadow-lg card ">
                  <div class="card-body">
                          {{-- Data Peserta --}}
                          <h4>Data Team</h4>
                          {{-- Nama --}}
                          <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label"> Nama Team </label>
                            <div class="col-sm-10">
                              <input type="text" name="namateam" class="form-control" id="inputPassword">
                            </div>
                          </div>
                  </div>
                </div>
            </div>
            
            {{-- Form 1 --}}
            <div class="col-md-12 mt-5">
                <div class="shadow-lg card ">
                    <div class="card-body">
                            {{-- Data Peserta --}}
                            <h4>Data Peserta 1</h4>
                            {{-- Nama --}}
                            <div class="form-group row">
                              <label for="inputPassword" class="col-sm-2 col-form-label">Nama Peserta 1</label>
                              <div class="col-sm-10">
                                <input type="text" name="nama1" class="form-control" id="inputPassword">
                              </div>
                            </div>
                            {{-- Nim --}}
                            <div class="form-group row">
                              <label for="inputPassword" class="col-sm-2 col-form-label">NIM Peserta 1 </label>
                              <div class="col-sm-10">
                                <input type="number" name="nim1" class="form-control" id="inputPassword">
                              </div>
                            </div>
                            {{-- Semester --}}
                            <div class="form-group row">
                              <label for="inputPassword" class="col-sm-2 col-form-label">Semester</label>
                              <div class="col-sm-10">
                                <select class="form-control form-control-sm" name="semester1">
                                  <option value="2"> 2 </option>
                                  <option value="4"> 4 </option>
                                  <option value="6"> 6 </option>
                                </select>
                              </div>
                            </div>
                            {{-- Prodi --}}
                            <div class="form-group row">
                              <label for="inputPassword" class="col-sm-2 col-form-label">Prodi</label>
                              <div class="col-sm-10">
                                <select class="form-control form-control-sm" name="prodi1">
                                  <option value="mi"> Manajemen Informatika </option>
                                  <option value="to"> Teknik Otomasi </option>
                                  <option value="tl"> Teknik Listrik </option>
                                </select>
                              </div>
                            </div>
                            {{-- Kelas --}}
                            <div class="form-group row">
                              <label for="inputPassword" class="col-sm-2 col-form-label">Kelas</label>
                              <div class="col-sm-10">
                                <select class="form-control form-control-sm" name="kelas1">
                                  {{-- MANAJEMEN INFORMATIKA --}}
                                  <option value="a"> A </option>
                                  <option value="b"> B </option>
                                  <option value="c"> C </option>
                                  <option value="d"> D </option>
                                </select>
                              </div>
                            </div>
                            {{-- Wa --}}
                            <div class="form-group row">
                              <label for="inputPassword" class="col-sm-2 col-form-label">No Telp (WA) </label>
                              <div class="col-sm-10">
                                <input type="number" name="no_telpon1" class="form-control" id="inputPassword">
                              </div>
                            </div>
                            {{-- ID Line --}}
                            <div class="form-group row">
                              <label for="inputPassword" class="col-sm-2 col-form-label"> ID Line </label>
                              <div class="col-sm-10">
                                <input type="text" name="id_line1" class="form-control" id="inputPassword">
                              </div>
                            </div>
                                                        {{-- ID_GAMES --}}
                                                        <div class="form-group row">
                                                          <label for="inputPassword" class="col-sm-2 col-form-label"> ID PUBG </label>
                                                          <div class="col-sm-10">
                                                            <input type="number" name="id_game1" class="form-control" id="inputPassword">
                                                          </div>
                                                        </div>
                            {{-- Jenis Makanan --}}
                            <hr>
                            <h4>Jenis Konsumsi</h4>
                            {{-- Vegetarian --}}
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="konsumsi1" id="exampleRadios1" value="vegetarian" checked>
                              <label class="form-check-label" for="exampleRadios1">
                                Vegetarian 
                              </label>
                            </div>

                            {{-- Non Vegetarian --}}
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="konsumsi1" id="exampleRadios1" value="non-vegetarian" checked>
                              <label class="form-check-label" for="exampleRadios1">
                                Non Vegetarian
                              </label>
                            </div>
                       
                            
                    </div>
                  </div>
            </div>

            {{-- Form 2 --}}
            <div class="col-md-12 mt-5">
              <div class="shadow-lg card ">
                  <div class="card-body">
                          {{-- Data Peserta --}}
                          <h4>Data Peserta 2</h4>
                          {{-- Nama --}}
                          <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Nama Peserta 2</label>
                            <div class="col-sm-10">
                              <input type="text" name="nama2" class="form-control" id="inputPassword">
                            </div>
                          </div>
                          {{-- Nim --}}
                          <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">NIM Peserta 2 </label>
                            <div class="col-sm-10">
                              <input type="number" name="nim2" class="form-control" id="inputPassword">
                            </div>
                          </div>
                          {{-- Semester --}}
                          <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Semester</label>
                            <div class="col-sm-10">
                              <select class="form-control form-control-sm" name="semester2">
                                <option value="2"> 2 </option>
                                <option value="4"> 4 </option>
                                <option value="6"> 6 </option>
                              </select>
                            </div>
                          </div>
                          {{-- Prodi --}}
                          <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Prodi</label>
                            <div class="col-sm-10">
                              <select class="form-control form-control-sm" name="prodi2">
                                <option value="mi"> Manajemen Informatika </option>
                                <option value="to"> Teknik Otomasi </option>
                                <option value="tl"> Teknik Listrik </option>
                              </select>
                            </div>
                          </div>
                          {{-- Kelas --}}
                          <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Kelas</label>
                            <div class="col-sm-10">
                              <select class="form-control form-control-sm" name="kelas2">
                                {{-- MANAJEMEN INFORMATIKA --}}
                                <option value="a"> A </option>
                                <option value="b"> B </option>
                                <option value="c"> C </option>
                                <option value="d"> D </option>
                              </select>
                            </div>
                          </div>
                          {{-- Wa --}}
                          <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">No Telp (WA) </label>
                            <div class="col-sm-10">
                              <input type="number" name="no_telpon2" class="form-control" id="inputPassword">
                            </div>
                          </div>
                          {{-- ID Line --}}
                          <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label"> ID Line </label>
                            <div class="col-sm-10">
                              <input type="text" name="id_line2" class="form-control" id="inputPassword">
                            </div>
                          </div>
                            {{-- ID_GAMES --}}
                            <div class="form-group row">
                              <label for="inputPassword" class="col-sm-2 col-form-label"> ID PUBG </label>
                              <div class="col-sm-10">
                                <input type="number" name="id_game2" class="form-control" id="inputPassword">
                              </div>
                            </div>
                          {{-- Jenis Makanan --}}
                          <hr>
                          <h4>Jenis Konsumsi</h4>
                          {{-- Vegetarian --}}
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="konsumsi2" id="exampleRadios1" value="vegetarian" checked>
                            <label class="form-check-label" for="exampleRadios1">
                              Vegetarian 
                            </label>
                          </div>
                          {{-- Non Vegetarian --}}
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="konsumsi2" id="exampleRadios1" value="non-vegetarian" checked>
                            <label class="form-check-label" for="exampleRadios1">
                              Non Vegetarian
                            </label>
                          </div>
                     
                          
                  </div>
                </div>
            </div>

            {{-- Form 3 --}}
            <div class="col-md-12 mt-5">
              <div class="shadow-lg card ">
                  <div class="card-body">
                          {{-- Data Peserta --}}
                          <h4>Data Peserta 3</h4>
                          {{-- Nama --}}
                          <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Nama Peserta 3</label>
                            <div class="col-sm-10">
                              <input type="text" name="nama3" class="form-control" id="inputPassword">
                            </div>
                          </div>
                          {{-- Nim --}}
                          <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">NIM Peserta 3 </label>
                            <div class="col-sm-10">
                              <input type="number" name="nim3" class="form-control" id="inputPassword">
                            </div>
                          </div>
                          {{-- Semester --}}
                          <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Semester</label>
                            <div class="col-sm-10">
                              <select class="form-control form-control-sm" name="semester3">
                                <option value="2"> 2 </option>
                                <option value="4"> 4 </option>
                                <option value="6"> 6 </option>
                              </select>
                            </div>
                          </div>
                          {{-- Prodi --}}
                          <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Prodi</label>
                            <div class="col-sm-10">
                              <select class="form-control form-control-sm" name="prodi3">
                                <option value="mi"> Manajemen Informatika </option>
                                <option value="to"> Teknik Otomasi </option>
                                <option value="tl"> Teknik Listrik </option>
                              </select>
                            </div>
                          </div>
                          {{-- Kelas --}}
                          <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Kelas</label>
                            <div class="col-sm-10">
                              <select class="form-control form-control-sm" name="kelas3">
                                {{-- MANAJEMEN INFORMATIKA --}}
                                <option value="a"> A </option>
                                <option value="b"> B </option>
                                <option value="c"> C </option>
                                <option value="d"> D </option>
                              </select>
                            </div>
                          </div>
                          {{-- Wa --}}
                          <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">No Telp (WA) </label>
                            <div class="col-sm-10">
                              <input type="number" name="no_telpon3" class="form-control" id="inputPassword">
                            </div>
                          </div>
                          {{-- ID Line --}}
                          <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label"> ID Line </label>
                            <div class="col-sm-10">
                              <input type="text" name="id_line3" class="form-control" id="inputPassword">
                            </div>
                          </div>
                            {{-- ID_GAMES --}}
                            <div class="form-group row">
                              <label for="inputPassword" class="col-sm-2 col-form-label"> ID PUBG </label>
                              <div class="col-sm-10">
                                <input type="number" name="id_game3" class="form-control" id="inputPassword">
                              </div>
                            </div>
                          {{-- Jenis Makanan --}}
                          <hr>
                          <h4>Jenis Konsumsi</h4>
                          {{-- Vegetarian --}}
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="konsumsi3" id="exampleRadios1" value="vegetarian" checked>
                            <label class="form-check-label" for="exampleRadios1">
                              Vegetarian 
                            </label>
                          </div>
                          {{-- Non Vegetarian --}}
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="konsumsi3" id="exampleRadios1" value="non-vegetarian" checked>
                            <label class="form-check-label" for="exampleRadios1">
                              Non Vegetarian
                            </label>
                          </div>
                     
                          
                  </div>
                </div>
            </div>

            {{-- Form 4 --}}
            <div class="col-md-12 mt-5">
              <div class="shadow-lg card ">
                  <div class="card-body">
                          {{-- Data Peserta --}}
                          <h4>Data Peserta 4</h4>
                          {{-- Nama --}}
                          <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Nama Peserta 4</label>
                            <div class="col-sm-10">
                              <input type="text" name="nama4" class="form-control" id="inputPassword">
                            </div>
                          </div>
                          {{-- Nim --}}
                          <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">NIM Peserta 4 </label>
                            <div class="col-sm-10">
                              <input type="number" name="nim4" class="form-control" id="inputPassword">
                            </div>
                          </div>
                          {{-- Semester --}}
                          <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Semester</label>
                            <div class="col-sm-10">
                              <select class="form-control form-control-sm" name="semester4">
                                <option value="2"> 2 </option>
                                <option value="4"> 4 </option>
                                <option value="6"> 6 </option>
                              </select>
                            </div>
                          </div>
                          {{-- Prodi --}}
                          <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Prodi</label>
                            <div class="col-sm-10">
                              <select class="form-control form-control-sm" name="prodi4">
                                <option value="mi"> Manajemen Informatika </option>
                                <option value="to"> Teknik Otomasi </option>
                                <option value="tl"> Teknik Listrik </option>
                              </select>
                            </div>
                          </div>
                          {{-- Kelas --}}
                          <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Kelas</label>
                            <div class="col-sm-10">
                              <select class="form-control form-control-sm" name="kelas4">
                                {{-- MANAJEMEN INFORMATIKA --}}
                                <option value="a"> A </option>
                                <option value="b"> B </option>
                                <option value="c"> C </option>
                                <option value="d"> D </option>
                              </select>
                            </div>
                          </div>
                          {{-- Wa --}}
                          <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">No Telp (WA) </label>
                            <div class="col-sm-10">
                              <input type="number" name="no_telpon4" class="form-control" id="inputPassword">
                            </div>
                          </div>
                          {{-- ID Line --}}
                          <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label"> ID Line </label>
                            <div class="col-sm-10">
                              <input type="text" name="id_line4" class="form-control" id="inputPassword">
                            </div>
                          </div>
                            {{-- ID_GAMES --}}
                            <div class="form-group row">
                              <label for="inputPassword" class="col-sm-2 col-form-label"> ID PUBG </label>
                              <div class="col-sm-10">
                                <input type="number" name="id_game4" class="form-control" id="inputPassword">
                              </div>
                            </div>
                          {{-- Jenis Makanan --}}
                          <hr>
                          <h4>Jenis Konsumsi</h4>
                          {{-- Vegetarian --}}
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="konsumsi4" id="exampleRadios1" value="vegetarian" checked>
                            <label class="form-check-label" for="exampleRadios1">
                              Vegetarian 
                            </label>
                          </div>
                          {{-- Non Vegetarian --}}
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="konsumsi4" id="exampleRadios1" value="non-vegetarian" checked>
                            <label class="form-check-label" for="exampleRadios1">
                              Non Vegetarian
                            </label>
                          </div>
                     
                          
                  </div>
                </div>
            </div>

            {{-- Sumbit --}}
            <div class="col-md-12 mt-5">
              <input class="btn btn-outline-danger btn-lg mx-auto col-lg-12 mt-4" type="submit" value="Kirim" >
            </div>
        </div>
        </form>

    </div>
</main>  

  
  
@endsection