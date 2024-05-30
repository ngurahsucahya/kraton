<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Kraton - Kreasi Education</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('template/img/favicon.ico')}}" rel="icon">

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
                <a href="/leaderboard" class="nav-item nav-link">Leaderboard</a>
                <!-- <a href="service.html" class="nav-item nav-link">Fitur</a> -->
                <!-- <a href="project.html" class="nav-item nav-link">Project</a> -->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Fitur Lain</a>
                    <div class="dropdown-menu bg-light m-0">
                        <!-- <a href="feature.html" class="dropdown-item">Forum</a> -->
                        <a href="/blog" class="dropdown-item">Berita Terbaru</a>
                        <!-- <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a> -->
                    </div>
                </div>
                @auth 
                    @if(Auth::check())
                        @php
                            $role = Auth::user()->role;
                        @endphp

                        @if($role === 'Admin')
                            <a href="contact.html" class="nav-item nav-link">Tim Pengembang Admin</a>
                        @elseif($role === 'Siswa')
                            <a href="/profile" class="nav-item nav-link">Profil Saya</a>
                        @endif
                    @endif
                @endauth
            </div>
            <form action="/logout" method="post">
            @csrf
                <button type="submit" id="logout" class="btn btn-danger rounded-0 py-4 px-lg-5 d-none d-lg-block">LOGOUT<i class="fa fa-arrow-right ms-3"></i></button>                    
            </form>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary">Latihan Soal</h6>
                <h1 class="mb-4">Silakan Pilih Mata Pelajaran</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded overflow-hidden">
                        <!-- <img class="img-fluid" src="{{ asset('template/img/img-600x400-1.jpg')}}" alt=""> -->
                        <img class="img-fluid" src="{{ asset('template/img/pengetahuanumum.png')}}" alt="">
                        <div class="position-relative p-4 pt-0">
                        <br></br><h4 class="mb-3">Pengetahuan Umum</h4>
                            <p>Berisi soal-soal tentang pengetahuan nasional dan dunia.</p>
                            <a class="small fw-medium" href="/pengetahuan-umum">Pilih<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="{{ asset('template/img/matematika.png')}}" alt="">
                        <div class="position-relative p-4 pt-0">
                        <br></br><h4 class="mb-3">Matematika</h4>
                            <p>Berisi soal matematika yang asik dan menyenangkan.</p>
                            <a class="small fw-medium" href="">Pilih<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="{{ asset('template/img/ipa.png')}}" alt="">
                        <div class="position-relative p-4 pt-0">
                        <br></br><h4 class="mb-3">Ilmu Pengetahuan Alam</h4>
                            <p>Berisi soal-soal tentang alam dan lingkungan sekitar.</p>
                            <a class="small fw-medium" href="">Pilih<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="{{ asset('template/img/ips.png')}}" alt="">
                        <div class="position-relative p-4 pt-0">
                        <br></br><h4 class="mb-3">Ilmu Pengetahuan Sosial</h4>
                            <p>Berisi soal-soal tentang hubungan sosial manusia.</p>
                            <a class="small fw-medium" href="">Pilih<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="{{ asset('template/img/bahasainggris.png')}}" alt="">
                        <div class="position-relative p-4 pt-0">
                        <br></br><h4 class="mb-3">Bahasa Inggris</h4>
                            <p>Belajar Bahasa Inggris yang asik dan menyenangkan.</p>
                            <a class="small fw-medium" href="">Pilih<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="{{ asset('template/img/bahasaindonesia.png')}}" alt="">
                        <div class="position-relative p-4 pt-0">
                            <br></br><h4 class="mb-3">Bahasa Indonesia</h4>
                            <p>Belajar Bahasa Indonesia yang asik dan menyenangkan.</p>
                            <a class="small fw-medium" href="">Pilih<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

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
