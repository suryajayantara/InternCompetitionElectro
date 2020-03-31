@extends('../master')

@section('body')

<section id="hero">
    <div id="particel.js">
      <div class="hero-container">
        <h1 class="mt-5"> Instalasi Penerangan </h1>
        <h2> Lorem ipsum dolor sit amet consectetur adipisicing elit. Id! </h2>
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
                          <form action="/instalasipenerangan/register/process" method="post">
                              {{ csrf_field() }}

                              {{-- Data Peserta --}}
                              <h4>Data Peserta</h4>
                              <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                  <input type="text" name="nama" class="form-control" id="inputPassword">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Nim</label>
                                <div class="col-sm-10">
                                  <input type="number" name="nim" class="form-control" id="inputPassword">
                                </div>
                              </div>
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