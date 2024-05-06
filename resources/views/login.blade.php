<!DOCTYPE html>
<html lang="en">

<head>
<<<<<<< HEAD
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Sign In</title>
  <!-- Bootstrap core CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <style>
    body {
      font-family: "Comic Sans MS", cursive, sans-serif;
    }
    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .form-signin {
      width: 100%;
      max-width: 330px;
      padding: 15px;
      margin: auto;
      border: 1px solid #eaeaea;
      border-radius: 10px;
      background-color: #f8f9fa;
    }
    .form-signin-heading {
      margin-bottom: 20px;
      text-align: center;
      color: #007bff;
    }
    .form-control {
      position: relative;
      box-sizing: border-box;
      height: auto;
      padding: 10px;
      font-size: 16px;
    }
    .form-control:focus {
      z-index: 2;
    }
    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }
    .btn-primary:hover {
      background-color: #0056b3;
      border-color: #0056b3;
    }
    .btn-register {
      background-color: #28a745;
      border-color: #28a745;
      color: #ffffff; /* Warna teks putih */
    }
    .btn-register:hover {
      background-color: #218838;
      border-color: #218838;
    }
  </style>
</head>
<body class="text-center">
  <div class="container">
    <form class="form-signin" action="/login" method="post">
      <h1 class="h3 mb-3 font-weight-normal form-signin-heading">Masuk Kraton</h1>
        <label for="username" class="sr-only">Username</label>
        <input type="text" id="username" class="form-control mb-2" placeholder="Username" name="username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control mb-2" placeholder="Password" name="password" required>
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Ingat saya
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Masuk</button>
      <a href="#" class="btn btn-lg btn-register btn-block mt-3">Daftar</a>
    </form>
  </div>
</body>
</html>



=======
    <meta charset="utf-8">
    <title>Kraton - Kreasi Education</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('template/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('template/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{ asset('template/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{ asset('template/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('template/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('template/css/style.css')}}" rel="stylesheet">
  
</head>

<body>

 <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
            <h2 class="m-0 text-primary">Kraton</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link active">Beranda</a>
                <a href="/kuistrial" class="nav-item nav-link">Coba Kuis</a>
                <!-- <a href="service.html" class="nav-item nav-link">Fitur</a> -->
                <!-- <a href="project.html" class="nav-item nav-link">Project</a> -->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Fitur Lain</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="feature.html" class="dropdown-item">Forum</a>
                        <a href="quote.html" class="dropdown-item">Berita Terbaru</a>
                        <!-- <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a> -->
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Tim Pengembang</a>
            </div>
            <a href="/register" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">DAFTAR<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


<!-- Quote Start -->
    <div class="container-fluid bg-light overflow-hidden my-0 px-lg-0">
        <div class="container quote px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 100px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('template/img/20220805_123216.jpg')}}" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 quote-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <h6 class="text-primary"></h6>
                        <h1 class="mb-4">MASUK</h1>
                        <p class="mb-4 pb-2">Halo, selamat datang di Kreasi Education</p>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row g-3">
                                <div class="col-12">              
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control border-0" placeholder="" id="username" name="username" style="height: 55px;" required>
                                </div>
                                <div class="col-12">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control border-0" placeholder="" id="password" name="password" style="height: 55px;" required>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('template/lib/wow/wow.min.js')}}"></script>
    <script src="{{ asset('template/lib/easing/easing.min.js')}}"></script>
    <script src="{{ asset('template/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{ asset('template/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{ asset('template/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('template/lib/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('template/lib/lightbox/js/lightbox.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('template/js/main.js')}}"></script>
</body>

<!-- Footer Start -->
    <div class="container-fluid bg-dark text-body footer mt-0 pt-0 wow fadeIn" data-wow-delay="0.1s">    
    <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-12 text-center ">
                        &copy; <a href="#" class="text-center">Kraton Education</a>, All Right Reserved.
                    </div>
                    <!-- <div class="col-md-6 text-center text-md-end">
                        Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                        <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

</html>
>>>>>>> 3fa509015ba816b9b33fe9b3ba7a03cd17c6fa02
