<!DOCTYPE html>
<html lang="en">

<head>
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
                <a href="/about" class="nav-item nav-link">Coba Kuis</a>
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
            <a href="/login" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">MASUK<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


<!-- Quote Start -->
    <div class="container-fluid bg-light overflow-hidden my-0 px-lg-0 ">
        <div class="container quote px-lg-0 ">
            <div class="row g-0 mx-lg-0 justify-content-center">
                <div class="col-lg-6 quote-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <h6 class="text-primary"></h6>
                        <h1 class="mb-4">DAFTAR</h1> 
                        <p class="mb-4 pb-2">Silakan isi pertanyaan dengan teliti.</p>
                        <form method="POST" action="{{ route('admin.tambah.pertanyaanUmum') }}">
                            @csrf
                            <div class="row g-3">
                                <div class="col-12">              
                                    <label for="pertanyaan" class="form-label">Pertanyaan</label>
                                    <input type="text" class="form-control border-0" placeholder="" id="pertanyaan" name="pertanyaan" style="height: 55px;" required>
                                </div>
                                <div class="col-12">
                                    <label for="A" class="form-label">Jawaban Pilihan A</label>
                                    <input type="text" class="form-control border-0" placeholder="" id="A" name="A" style="height: 55px;" required>
                                </div>
                                <div class="col-12">
                                    <label for="B" class="form-label">Jawaban Pilihan B</label>
                                    <input type="text" class="form-control border-0" placeholder="" id="B" name="B" style="height: 55px;" required>
                                </div>
                                <div class="col-12">
                                    <label for="C" class="form-label">Jawaban Pilihan C</label>
                                    <input type="text" class="form-control border-0" placeholder="" id="C" name="C" style="height: 55px;" required>
                                </div>
                                <div class="col-12">
                                    <label for="D" class="form-label">Jawaban Pilihan D</label>
                                    <input type="txt" class="form-control border-0" placeholder="" id="D" name="D" style="height: 55px;" required>
                                </div>
                                <div class="col-12">              
                                    <label for="jawabanBenar" class="form-label">Jawaban Benar</label>
                                    <select class="form-select" id="jawabanBenar" name="jawabanBenar" style="height: 55px;" required>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>
                                <div class="col-12">              
                                    <label for="penjelasan" class="form-label">Penjelasan</label>
                                    <input type="text" class="form-control border-0" placeholder="" id="penjelasan" name="penjelasan" style="height: 55px;" required>
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