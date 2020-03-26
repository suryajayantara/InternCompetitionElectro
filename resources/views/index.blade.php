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
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </p>

          <div class="icon-box wow fadeInUp">
            <div class="icon"><i class="fa fa-link"></i></div>
            <h4 class="title"><a href="">Solidarity</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div>

          <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
            <div class="icon"><i class="fa fa-cogs"> </i></div>
            <h4 class="title"><a href=""></a>Skill Enchament</h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>

          <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
            <div class="icon"><i class="fa fa-trophy"></i></div>
            <h4 class="title"><a href="">Be Champion</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
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
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
          <div class="box">
            <div class="icon"><a href="/ml"><i class="fa fa-desktop"></i></a></div>
            <h4 class="title"><a href="/ml">Mobile Legend Bang Bang</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
          <div class="box">
            <div class="icon"><a href="/filmpendek"><i class="fa fa-video-camera"></i></a></div>
            <h4 class="title"><a href="/filmpendek">Film Pendek</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
          <div class="box">
            <div class="icon"><a href="/desainposter"><i class="fa fa-pencil"></i></a></div>
            <h4 class="title"><a href="/desainposter">Desain Poster</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
          <div class="box">
            <div class="icon"><a href="/instalasipenerangan"><i class="fa fa-bolt"></i></a></div>
            <h4 class="title"><a href="/instalasipenerangan">Instalasi Penerangan</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
          <div class="box">
            <div class="icon"><a href="/lkct"><i class="fa fa-lightbulb-o"></i></a></div>
            <h4 class="title"><a href="/lkct">Lomba Cipta Karya Teknologi </a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
        </div>
        <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
          <div class="box">
            <div class="icon"><a href="/plc"><i class="fa fa-microchip"></i></a></div>
            <h4 class="title"><a href="/plc">Progammable Logic Control</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
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
          <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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