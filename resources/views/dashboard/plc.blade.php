@extends('index')


@section('body')
<main>
    <div class="container-fluid">
        <h1 class="mt-4 display-4">Dashboard</h1>
        <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab distinctio ad perspiciatis quasi vel vitae autem, fugit reiciendis fugiat praesentium beatae illo doloribus quibusdam assumenda. Perferendis ipsam magni excepturi repellendus. Quisquam magni cum necessitatibus laudantium ullam asperiores, deserunt fugiat vel suscipit, molestias dolorum aliquid consectetur rem eius sapiente exercitationem blanditiis natus quae. Molestiae quos repellendus voluptatem sapiente ab officiis eos?</p>
    </div>

    <!-- Mulai Di SIni Gannnn -->
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                        <table class="table">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">NIM</th>
                                <th scope="col">PRODI</th>
                                <th scope="col">KELAS</th>
                                <th scope="col">Status Pembayaran</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Simayodika</td>
                                <td>1915323057</td>
                                <td>Manajemen Informatika</td>
                                <td>2 MI A</td>
                                <td>
                                    <a href="#" class=" btn btn-danger">Konfirmasi</a>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                </div>
            </div>
        </div>
    </div>
    </main>
    
@endsection