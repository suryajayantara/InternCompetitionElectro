@extends('../master')

@section('body')

<section id="hero">
    <div id="particel.js">
      <div class="hero-container">
        <h1 class="mt-5"> Lomba Cipta Karya Teknologi  </h1>
        <h2> Ubah Dunia Dengan Ide Cemerlangmu ! </h2>
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

          <div class="row">
              <h1 class="ml-3">Form Pendaftaran</h1>
              <div class="col-md-12">
                  <div class="shadow-lg card ">
                      <div class="card-body">
                          <form action="/lkct/register/process" method="post">
                              {{ csrf_field() }}

                              {{-- Data Peserta --}}
                              <h4>Data Peserta 1</h4>
                              <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Nama Peserta 1</label>
                                <div class="col-sm-10">
                                  <input type="text" name="nama1" class="form-control" id="inputPassword">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">NIM Peserta 1 </label>
                                <div class="col-sm-10">
                                  <input type="number" name="nim1" class="form-control" id="inputPassword">
                                </div>
                              </div>

                              <h4>Data Peserta 2</h4>
                              <hr>
                              <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Nama Peserta 2</label>
                                <div class="col-sm-10">
                                  <input type="text" name="nama2" class="form-control" id="inputPassword">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Nim Peserta 2</label>
                                <div class="col-sm-10">
                                  <input type="number" name="nim2" class="form-control" id="inputPassword">
                                </div>
                              </div>

                              
                              <h4>Data Peserta 3</h4>
                              <hr>
                              <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Nama Peserta 3</label>
                                <div class="col-sm-10">
                                  <input type="text" name="nama3" class="form-control" id="inputPassword">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Nim Peserta 2</label>
                                <div class="col-sm-10">
                                  <input type="number" name="nim3" class="form-control" id="inputPassword">
                                </div>
                              </div>

                              <hr>
                              <h4>Data Umum</h4>
                              <hr>
                              <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Semester</label>
                                <div class="col-sm-10">
                                  <select class="form-control form-control-sm" name="semester">
                                    <option value="2"> 2 </option>
                                    <option value="4"> 4 </option>
                                    <option value="6"> 6 </option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Prodi</label>
                                <div class="col-sm-10">
                                  <select class="form-control form-control-sm" name="prodi">
                                    <option value="mi"> Manajemen Informatika </option>
                                    <option value="to"> Teknik Otomasi </option>
                                    <option value="tl"> Teknik Listrik </option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Kelas</label>
                                <div class="col-sm-10">
                                  <select class="form-control form-control-sm" name="kelas">
                                    {{-- MANAJEMEN INFORMATIKA --}}
                                    <option value="a"> A </option>
                                    <option value="b"> B </option>
                                    <option value="c"> C </option>
                                    <option value="d"> D </option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">No Telp (WA) </label>
                                <div class="col-sm-10">
                                  <input type="number" name="no_telpon" class="form-control" id="inputPassword">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label"> ID Line </label>
                                <div class="col-sm-10">
                                  <input type="text" name="id_line" class="form-control" id="inputPassword">
                                </div>
                              </div>

                              <hr>
                              <h4>Jenis Konsumsi</h4>
                              {{-- Vegetarian --}}
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="konsumsi" id="exampleRadios1" value="vegetarian" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                  Vegetarian 
                                </label>
                              </div>
                              {{-- Non Vegetarian --}}
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="konsumsi" id="exampleRadios1" value="non-vegetarian" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                  Non Vegetarian
                                </label>
                              </div>
                              <hr>
                              <div class="row">
                                @if (date('d') >= 10 && date('d') <= 20 )
                                    <input class="btn btn-outline-danger btn-lg mx-auto col-lg-11 mt-4" type="submit" value="Kirim">
                                @else 
                                    <input class="btn btn-outline-danger btn-lg mx-auto col-lg-11 mt-4" type="submit" value="Belum Bisa Mendaftar :(" disabled>    
                                @endif
                                
                              </div>
                            </form>
                      </div>
                    </div>
              </div>
          </div>
      </div>
  </main>  

  
  
@endsection