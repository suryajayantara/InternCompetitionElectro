@extends('../master')

@section('body')

<section id="hero">
  <div id="particel.js">
    <div class="hero-container">
      <h1 class="mt-5"> Desing Poster</h1>
      <h2> Ciptakan Imajinasi melalui Rangkaian Ilustrasi</h2>
      <a class="btn-get-started" href="/desainposter/register"> Daftar Sekarang ! </a>
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
                      <li>Peserta merupakan mahasiswa/mahasiswi Politeknik Negeri Bali Jurusan Teknik Elektro
                        semester (2, 4,6)</li>
                      <li>Sifat lomba adalah Individu</li>
                      <li>Peserta harus mengisi formulir pendaftaran lengkap yang berisi semua keterangan
                        mengenai data diri secara lengkap</li>
                      <li>Peserta wajib mengikuti peraturan yang telah dibuat oleh panitia</li>
                    </ol>
                </div>
                {{-- End List Here --}}
                <footer class="blockquote-footer">Panitia <cite title="Source Title"> Intern Electro Competition </cite></footer>
              </blockquote>
            </div>
          </div>
        </div>

        <div class="col-lg-12 order-2 mt-5">         
          <a href="/desainposter/register" class="register-btn text-center"> Daftar Sekarang ! </a>
      </div>

    </div>
  </section><!-- #about -->

  


</main>  
@endsection