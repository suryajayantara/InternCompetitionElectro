@extends('../master')
@section('body')

<section id="hero">
  <div id="particel.js">
    <div class="hero-container">
      <h1 class="mt-5"> Short Movie</h1>
      <h2> Wujudkan Kreativitas Melalui Rangkaian Gambar !</h2>
      <a class="btn-get-started" href="/filmpendek/register"> Daftar Sekarang ! </a>
    </div>
  </div>
</section><!-- #hero -->

<main id="main">


  <section id="about">
    <div class="container">
      <div class="row about-container">
        
        <div class="col-lg-12 order-lg-2 order-1">
          <div class=" card shadow-lg">
            <div class="card-header">
              <h1 class="display-4 mt-4">Syarat dan Ketentuan</h1>
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                {{--  Start List Here --}}
                <div class="rules">
                    <ol>
                      <li>Merupakan Mahasiswa Politeknik Negeri Bali Jurusan Teknik Elektro Semester 2
                        dan 4 dan 6.</li>
                      <li>Sifat lomba adalah berkelompok.</li>
                      <li>Setiap kelompok diwajibkan dari kelas yang sama dan tidak diperbolehkan dengan kelas
                        yang berbeda.</li>
                      <li>Tiap kelompok terdiri atas minimal 4 dan maksimal 5 orang peserta.</li>
                      <li>Peserta harus mengisi formulir pendaftaran lengkap yang berisi semua keterangan
                        mengenai data diri secara lengkap</li>
                      <li>Peserta wajib mengikuti peraturan yang telah dibuat oleh panitia.</li>
                    </ol>
                </div>
                {{-- End List Here --}}
                <footer class="blockquote-footer">Panitia <cite title="Source Title"> Intern Electro Competition </cite></footer>
              </blockquote>
            </div>
          </div>
        </div>

        <div class="col-lg-12 order-2 mt-5">         
          <a href="/filmpendek/register" class="register-btn text-center"> Daftar Sekarang ! </a>
      </div>

    </div>
  </section><!-- #about -->



</main>  
@endsection