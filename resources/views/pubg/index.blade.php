@extends('../master')

@section('body')

<section id="hero">
  <div id="particel.js">
    <div class="hero-container">
      <h1 class="mt-5">PUBG : MOBILE </h1>
      <h2> Winner Winner Chiken Dinner !</h2>
      <a class="btn-get-started" data-toggle="modal" data-target="#staticBackdrop" href="#about"> Daftar Sekarang ! </a>
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
                      <li>Tiap Team mengirim ID PUBG dan Nama Team.</li>
                      <li>Setiap team terdiri dari 4 orang.</li>
                      <li>Masing-masing Team terdiri dari 4 orang (Tanpa cadangan), dimana anggotanya
                        bebas dengan syarat mahasiswa jurusan teknik elektro semester 2 dan 4</li>
                      <li>Team dilarang untuk mengganti player yang sudah terdaftar selama acara
                        berlangsung.</li>
                      <li>Peserta yang tidak mentaati peraturan akan diberikan sanksi berupa teguran
                        pertama / langsung diskualifikasi, tergantung peraturan yang dilanggar.</li>
                    </ol>
                </div>
                {{-- End List Here --}}
                <footer class="blockquote-footer">Panitia <cite title="Source Title"> Intern Electro Competition </cite></footer>
              </blockquote>
            </div>
          </div>
        </div>

        <div class="col-lg-12 order-2 mt-5">         
          <a href="/pubg/register" class="register-btn text-center"> Daftar Sekarang ! </a>
      </div>

    </div>
  </section><!-- #about -->

  


</main>  
@endsection