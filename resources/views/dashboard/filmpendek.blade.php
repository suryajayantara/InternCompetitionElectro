@extends('../master-dash')
@section('body')
    
<main>
    <!-- Mulai Di SIni Gannnn -->
    <div class="container-fluid">
        <div class="row">
            <div class="container-fluid">
                <h1 class="mt-4 display-4">FILM PENDEK</h1>
                <p class="lead">Merupakan cabang lomba membuat video singkat dan kompleks untuk memberikan pelajaran kepada masyarakat melalui audio visual</p>
                <a href="#" class="btn btn-primary"> Print Data </a>
            </div>
            {{-- Card LKCT Team --}}
            @foreach ($datas as $data)
            <?php $kelas = strtoupper($data->kelas);$res = str_replace('-', ' ', $kelas); ?>
            <div class="col-md-12 mt-3">
              <div class="card shadow-lg">                   
              <h4 class="ml-4 mt-2 display-4"> {{ $res }} </h4>
                      <hr>
                      <table class="table table-responsive-sm">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Nama</th>
                            </tr>
                          </thead>
                          <tbody>
                            {{-- Data 1 --}}
                            <tr>
                              <th scope="row">1</th>
                              <td> {{$data->nama_1}} </td>
                            </tr>
                            {{-- Data 2 --}}
                            <tr>
                              <th scope="row">2</th>
                              <td> {{$data->nama_2}} </td>
                            </tr>
                            {{-- Data 3 --}}
                            <tr>
                              <th scope="row">3</th>
                              <td> {{$data->nama_3}} </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td> {{$data->nama_4}} </td>
                              </tr>
                              <tr>
                                <th scope="row">5</th>
                                <td> {{$data->nama_5}} </td>
                              </tr>
                          </tbody>
                        </table>
                  <a href="#" class="btn btn-danger mt-4 mx-auto mb-4" style="width:80%">Konfirmasi Pembayaran</a>
              </div>
          </div>
            @endforeach
            {{-- Card PUBG --}}
            
            <div class="links mx-auto mt-5">
              {{$datas->links()}}
            </div>

        </div>
    </div>
    </main>

@endsection