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
            <div class="col-md-12 mt-3">
                <div class="card shadow-lg">                   
                        <h4 class="ml-4 mt-2 display-4"> Kuda lapar Team</h4>
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
                              <tr>
                                <th scope="row">1</th>
                                <td>Simayodika</td>
                                <td>1915323057</td>
                                <td>Manajemen Informatika</td>
                                <td>2 MI A</td>
                                <td>1912312312312312312</td>
                              </tr>
                            </tbody>
                          </table>
                    <a href="#" class="btn btn-danger mt-4 mx-auto mb-4" style="width:80%">Konfirmasi Pembayaran</a>
                </div>
            </div>
            {{-- Card PUBG --}}            
        </div>
    </div>
    </main>

@endsection