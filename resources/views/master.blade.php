<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="/img/fav.png" type="image/x-icon">
  <title> ICE  | Intern Competition Of Electro </title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href=" {{asset('img/favicon.png')}} " rel="icon">
  <link href=" {{asset('img/apple-touch-icon.png')}} " rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href=" {{asset('lib/bootstrap/css/bootstrap.min.css')}} " rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href=" {{asset('lib/font-awesome/css/font-awesome.min.css')}} " rel="stylesheet">
  <link href=" {{asset('lib/animate/animate.min.css')}} " rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Allura&display=swap" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href=" {{asset('css/style.css')}} " rel="stylesheet">

</head>

<body>


  <header id="header">
    <div class="container">
      <div id="" class="pull-left">
        <a href="#hero"><img src=" {{asset('img/logo.png')}} " alt="" title="" class="logo-img"></img></a>
      </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="/#hero">Utama</a></li>
          <li><a href="/#about">Tentang</a></li>
          <li><a href="/#services">Lomba</a></li>
          <li><a href="/#call-to-action">Pertanyaan</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header>

  

  @yield('body')

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        Himpunan Mahasiswa Jurusan <span><a href="http://instagram.com/hmjte">Teknik Elektro</a></span> Politeknik Negeri Bali
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src=" {{asset('lib/jquery/jquery.min.js')}} "></script>
  <script src=" {{asset('lib/jquery/jquery-migrate.min.js')}} "></script>
  <script src=" {{asset('lib/bootstrap/js/bootstrap.bundle.min.js')}} "></script>
  <script src=" {{asset('lib/easing/easing.min.js')}} "></script>
  <script src=" {{asset('lib/wow/wow.min.js')}} "></script>
  <script src=" {{asset('lib/waypoints/waypoints.min.js')}} "></script>
  <script src=" {{asset('lib/counterup/counterup.min.js')}} "></script>
  <script src=" {{asset('lib/superfish/hoverIntent.js')}} "></script>
  <script src=" {{asset('lib/superfish/superfish.min.js')}} "></script>

  <!-- Template Main Javascript File -->
  <script src=" {{asset('js/main.js')}} "></script>
  <script src=" {{asset('js/app.js')}} "></script>

</body>
</html>
