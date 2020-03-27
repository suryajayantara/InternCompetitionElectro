@extends('../master')

@section('body')
<section id="hero">
  <div id="particel.js">
    <div class="hero-container">
      <h1 class="mt-5"> Lomba Cipta Karya Teknologi </h1>
      <h2> Ubah Dunia Dengan Ide Cemerlangmu ! </h2>
      <a class="btn-get-started" data-toggle="modal" data-target="#staticBackdrop" href="/lkct/register"> Daftar Sekarang ! </a>
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
                      <li>Peserta merupakan mahasiswa aktif semester 2, 4, dan 6 jurusan Teknik Elektro
                        Politeknik Negeri Bali.</li>
                      <li>MPerlombaan bersifat tim, dengan ketentuan 1 tim terdiri maksimal 3 pengusul
                        yang berasal dari satu kelas yang sama pada jurusan Teknik Elektro.</li>
                      <li>Sifat lomba berkelompok.</li>
                      <li>Setiap satu orang peserta hanya di perkenankan tergabung 1 tim.</li>
                      <li>Setiap tim hanya dapat mengirimkan 1 judul karya tulis.</li>
                    </ol>
                </div>
                {{-- End List Here --}}
                <footer class="blockquote-footer">Panitia <cite title="Source Title"> Intern Electro Competition </cite></footer>
              </blockquote>
            </div>
          </div>
        </div>

        <div class="col-lg-12 order-2 mt-5">         
          <a href="/lkct/register" class="register-btn text-center"> Daftar Sekarang ! </a>
      </div>

    </div>
  </section><!-- #about -->


  


</main>  
@endsection