@extends('../master-dash')
@section('body')
    
<main>
    <!-- Mulai Di SIni Gannnn -->
    <div class="container-fluid">
        <div class="row">
            <div class="container-fluid">
                <h1 class="mt-4 display-4">Lomba Cipta Karya Teknologi </h1>
                <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab distinctio ad perspiciatis quasi vel vitae autem, fugit reiciendis fugiat praesentium beatae illo doloribus quibusdam assumenda. Perferendis ipsam magni excepturi repellendus. Quisquam magni cum necessitatibus laudantium ullam asperiores, deserunt fugiat vel suscipit, molestias dolorum aliquid consectetur rem eius sapiente exercitationem blanditiis natus quae. Molestiae quos repellendus voluptatem sapiente ab officiis eos?</p>
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
                              <th scope="col">NIM</th>
                            </tr>
                          </thead>
                          <tbody>
                            {{-- Data 1 --}}
                            <tr>
                              <th scope="row">1</th>
                              <td> {{$data->nama_1}} </td>
                              <td> {{$data->nim_1}} </td>
                            </tr>
                            {{-- Data 2 --}}
                            <tr>
                              <th scope="row">2</th>
                              <td> {{$data->nama_2}} </td>
                              <td> {{$data->nim_2}} </td>
                            </tr>

                            {{-- Data 3 --}}
                            <tr>
                              <th scope="row">3</th>
                              <td> {{$data->nama_3}} </td>
                              <td> {{$data->nim_3}} </td>\
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