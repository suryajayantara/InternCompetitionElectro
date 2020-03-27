@extends('master')

@section('body')

<section id="hero">
  <div id="particel.js">
    <div class="hero-container">
      <br>
      <h1 class="mt-5">Intern Competition Of Electro</h1>
      <hr class="bg-border">
      <h2 class="quotes mt-3"> Show your Creativity in Revolution Technology </h2>
      <a href="#about" class="btn-get-started">Lihat Selengkapnya</a>
    </div>
  </div>
</section><!-- #hero -->

<main id="main">


  <section id="about">
    <div class="container">
      <div class="row about-container">

        <div class="col-lg-6 content order-lg-1 order-2">
          <h2 class="title">Solidaritas Dalam Kreasi ! </h2>
          <p>
            Intern Competetion of Electro atau yang lebih dikenal dengan ICE merupakan ajang perlombaan intern antar Mahasiswa Jurusan Teknik Elektro di lingkungan Politeknik Negeri Bali yang setiap tahunnya diselenggarakan secara rutin. ICE tahun 2020 dilaksanakan dengan mengusung tema "SHOW YOUR CREATIVITY, IN REVOLUTION TECHNOLOGY"
          </p>

          <div class="icon-box wow fadeInUp">
            <div class="icon"><i class="fa fa-link"></i></div>
            <h4 class="title"><a href="">Solidarity</a></h4>
            <p class="description">Melalui kegiatan ICE para peserta diharapkan dapat meningkatkan solidaritas dan kerjasama tim antar Mahasiswa Jurusan Teknik Elektro.</p>
          </div>

          <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
            <div class="icon"><i class="fa fa-cogs"> </i></div>
            <h4 class="title"><a href=""></a>Creativity</h4>
            <p class="description">Kegiatan ICE merupakan wadah bagi para peserta untuk mengasah kemampuan dan menyalurkan kreativitas mereka dalam bidang akademik maupun non akademik.</p>
          </div>

          <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
            <div class="icon"><i class="fa fa-trophy"></i></div>
            <h4 class="title"><a href="">Be Champion</a></h4>
            <p class="description">Dengan adanya ICE diharapkan dapat memacu semangat dan mental juara para peserta dalam berkompetisi.</p>
          </div>

        </div>

        <div class="col-lg-6 order-lg-2 order-1 wow fadeInRight">
        <img src="{{ asset('/img/intro.png')}}" class="my-intro">
        </div>
      </div>

    </div>
  </section><!-- #about -->

  <section id="services">
    <div class="container wow fadeIn">
      <div class="section-header">
        <h3 class="section-title">Lomba</h3>
        <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
          <div class="box">
            <div class="icon"><a href="/pubg"><i class="fa fa-gamepad"></i></a></div>
            <h4 class="title"><a href="/pubg">PUBG : Mobile </a></h4>
            <p class="description">Merupakan lomba battle royal yang saling bertahan hidup satu sama lain dimana pemain terakhir yang hidup adalah pemenang</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
          <div class="box">
            <div class="icon"><a href="/ml"><i class="fa fa-desktop"></i></a></div>
            <h4 class="title"><a href="/ml">Mobile Legend Bang Bang</a></h4>
            <p class="description">Merupakan lomba yang bergenre MOBA dimana setiap tim harus menghancurkan base musuh satu sama lain</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
          <div class="box">
            <div class="icon"><a href="/filmpendek"><i class="fa fa-video-camera"></i></a></div>
            <h4 class="title"><a href="/filmpendek">Film Pendek</a></h4>
            <p class="description">Merupakan cabang lomba membuat video singkat dan kompleks untuk memberikan pelajaran kepada masyarakat melalui audio visual</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
          <div class="box">
            <div class="icon"><a href="/desainposter"><i class="fa fa-pencil"></i></a></div>
            <h4 class="title"><a href="/desainposter">Desain Poster</a></h4>
            <p class="description">Merupakan cabang lomba membuat suatu desain berupa poster dengan tujuan memberikan informasi dan mengedukasi masyarakat</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
          <div class="box">
            <div class="icon"><a href="/instalasipenerangan"><i class="fa fa-bolt"></i></a></div>
            <h4 class="title"><a href="/instalasipenerangan">Instalasi Penerangan</a></h4>
            <p class="description">Merupakan cabang lomba merangkai beberapa komponen listrik yang saling terhubung dari sumber listrik ke beban sesuai dengan diagram  yang yang diberikan .</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
          <div class="box">
            <div class="icon"><a href="/lkct"><i class="fa fa-lightbulb-o"></i></a></div>
            <h4 class="title"><a href="/lkct">Lomba Cipta Karya Teknologi </a></h4>
            <p class="description">Merupakan lomba yang mewadahi kreatifitas dan inovasi melalui sebuah karya tulis yang kemudian direalisasikan menjadi sebuah teknologi yang berguna bagi masyarakat</p>
          </div>
        </div>
        <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
          <div class="box">
            <div class="icon"><a href="/plc"><i class="fa fa-microchip"></i></a></div>
            <h4 class="title"><a href="/plc">Progammable Logic Control</a></h4>
            <p class="description">Merupakan cabang lomba yang bertujuan untuk mengontrol suatu komponen  sesuai dengan perintah yang diberikan dengan menggunakan alat PLC </p>
          </div>
        </div>
      </div>

    </div>
  </section><!-- #services -->

  <section id="call-to-action">
    <div class="container wow fadeIn">
      <div class="row">
        <div class="col-lg-9 text-center text-lg-left">
          <h3 class="cta-title">Ada Pertanyaan ?</h3>
        </div>
        <div class="col-lg-3 cta-btn-container text-center">
          <a class="cta-btn align-middle" data-toggle="modal" data-target="#staticBackdrop"> <i class="fa fa-whatsapp"> </i> Tanya Panitia</a>
        </div>
      </div>
    </div>
  </section><!-- #call-to-action -->


</main>


<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content modal-lg">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Tanya Panitia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/send-wa" method="post">
          {{ csrf_field() }}
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Nama : </label>
            <div class="col-sm-10">
              <input type="text" name="nama" class="form-control" id="inputPassword">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Kelas : </label>
            <div class="col-sm-10">
              <input type="text" name="kelas" class="form-control" id="inputPassword">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Prodi : </label>
            <div class="col-sm-10">
              <input type="text" name="prodi" class="form-control" id="inputPassword">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label"> Cabang Lomba : </label>
            <div class="col-sm-10">
              <input type="text" name="cabanglomba" class="form-control" id="inputPassword">
            </div>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Pertanyaan</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="pertanyaan" rows="3"></textarea>
          </div>
          <input class="btn btn-outline-danger btn-sm justify-content-center" type="submit" value="Kirimkan">
        </form>
      </div>

    </div>
  </div>
</div>


<script>
  let wa = document.querySelector('#send-wa');
  wa.addEventListener('click',function() {
    console.log('ok!');
  })
</script>

    
@endsection