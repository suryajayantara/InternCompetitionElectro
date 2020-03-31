@extends('../master-dash')
@section('body')
    
<main>
    <div class="container-fluid">
        <h1 class="mt-4 display-4">Instalasi Penerangan</h1>
        <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab distinctio ad perspiciatis quasi vel vitae autem, fugit reiciendis fugiat praesentium beatae illo doloribus quibusdam assumenda. Perferendis ipsam magni excepturi repellendus. Quisquam magni cum necessitatibus laudantium ullam asperiores, deserunt fugiat vel suscipit, molestias dolorum aliquid consectetur rem eius sapiente exercitationem blanditiis natus quae. Molestiae quos repellendus voluptatem sapiente ab officiis eos?</p>
        <a href="#" class="btn btn-primary">Print Data</a>
    </div>

    <!-- Mulai Di SIni Gannnn -->
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                        <table class="table">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col" class="text-center">#</th>
                                <th scope="col" class="text-center">Nama</th>
                                <th scope="col" class="text-center">NIM</th>
                                <th scope="col" class="text-center">PRODI</th>
                                <th scope="col" class="text-center">KELAS</th>
                                <th scope="col" class="text-center">Status Pembayaran</th>
                              </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0; ?>
                              @foreach ($datas as $data)
                              <?php $no++;
                                $kelas = strtoupper($data->kelas);$res = str_replace('-', ' ', $kelas);
                              ?> 


                              <tr>
                                <th scope="row">{{$no}}</th>
                                <td> {{$data->nama}} </td>
                                <td> {{$data->nim}} </td>
                                <td> {{$data->prodi}} </td>
                                <td> {{ $res }} </td>
                                <td>
                                    <a href="#" class=" btn btn-success justify-content-center">Konfirmasi </a>
                                    <a href="#" class=" btn btn-danger text-center"> Hapus </a>
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                          <div class="row">
                            <div class="col-3 mx-auto">
                                <div class="text-center">
                                  {{ $datas->links()}}
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    </main>
    
@endsection