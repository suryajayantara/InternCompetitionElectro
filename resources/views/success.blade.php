@extends('master')

@section('body')

<section id="hero">
    <div id="particel.js">
      <div class="hero-container">
        <h1 class="mt-5"> {{$title}} </h1>
        <h2> {{$desc}} </h2>
        <a href="#about" class="btn-get-started" data-toggle="modal" data-target="#staticBackdrop"> Thank You  </a>
      </div>
    </div>
  </section><!-- #hero -->
  
  <main id="main">
      
      
      <div class="container mb-5 " id="about">

        <div class="row">

            <div class="col-md-12">
                <h1 class="text-center"> Pendaftaran Berhasil ! </h1>
                <p class="text-center lead"> Selamat <strong>{{$request-> nama}}</strong> , Pendaftaranmu di lomba <strong>{{$lomba}}</strong> Berhasil, Silahkan tunggu konfirmasi panitia melalui Whatsapp. </p>
            </div>

        </div>

          
      </div>
  </main>  

  
  
@endsection