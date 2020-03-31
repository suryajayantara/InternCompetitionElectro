@extends('../master-dash')
@section('body')
    
<main>
    <!-- Mulai Di SIni Gannnn -->
    <div class="container-fluid">
        <div class="row">
            <div class="container-fluid">
                <h1 class="mt-4 display-4">PUBG : Mobile </h1>
                <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab distinctio ad perspiciatis quasi vel vitae autem, fugit reiciendis fugiat praesentium beatae illo doloribus quibusdam assumenda. Perferendis ipsam magni excepturi repellendus. Quisquam magni cum necessitatibus laudantium ullam asperiores, deserunt fugiat vel suscipit, molestias dolorum aliquid consectetur rem eius sapiente exercitationem blanditiis natus quae. Molestiae quos repellendus voluptatem sapiente ab officiis eos?</p>
                <a href="#" class="btn btn-primary"> Print Data </a>
            </div>
            {{-- Card PUBG Team --}}
            @foreach ($datas as $data)
            <div class="col-md-12 mt-3">
              <div class="card shadow-lg">                   
              <h4 class="ml-4 mt-2 display-4"> {{ $data->nama_team }} </h4>
                      <hr>
                      <table class="table table-responsive-sm">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Nama</th>
                              <th scope="col">NIM</th>
                              <th scope="col">PRODI</th>
                              <th scope="col">KELAS</th>
                              <th scope="col">ID PUBG</th>
                            </tr>
                          </thead>
                          <tbody>
                            {{-- Data 1 --}}
                            <tr>
                              <th scope="row">1</th>
                              <td> {{$data->nama_1}} </td>
                              <td> {{$data->nim_1}} </td>
                              <td> {{$data->prodi_1}} </td>
                              <td> {{$data->kelas_1}} </td>
                              <td> {{$data->id_game_1}} </td>
                            </tr>
                            {{-- Data 2 --}}
                            <tr>
                              <th scope="row">2</th>
                              <td> {{$data->nama_2}} </td>
                              <td> {{$data->nim_2}} </td>
                              <td> {{$data->prodi_2}} </td>
                              <td> {{$data->kelas_2}} </td>
                              <td> {{$data->id_game_2}} </td>
                            </tr>

                            {{-- Data 3 --}}
                            <tr>
                              <th scope="row">3</th>
                              <td> {{$data->nama_3}} </td>
                              <td> {{$data->nim_3}} </td>
                              <td> {{$data->prodi_3}} </td>
                              <td> {{$data->kelas_3}} </td>
                              <td> {{$data->id_game_3}} </td>
                            </tr>

                            {{-- Data 1 --}}
                            <tr>
                              <th scope="row">4</th>
                              <td> {{$data->nama_4}} </td>
                              <td> {{$data->nim_4}} </td>
                              <td> {{$data->prodi_4}} </td>
                              <td> {{$data->kelas_4}} </td>
                              <td> {{$data->id_game_4}} </td>
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