<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
<<<<<<< HEAD
    <title>Kraton - Leaderboard</title>
=======
    <title>Kraton - Kreasi Education</title>
>>>>>>> 86f9beee26fca756625136e95ecb18c90cc43baf
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

<<<<<<< HEAD
=======
    <!-- Libraries Stylesheet -->
    <link href="{{ asset('template/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{ asset('template/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{ asset('template/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

>>>>>>> 86f9beee26fca756625136e95ecb18c90cc43baf
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
<<<<<<< HEAD
                <a href="index.html" class="nav-item nav-link">Beranda</a>
                <a href="about.html" class="nav-item nav-link">Coba Kuis</a>
                <!-- Add leaderboard link here -->
                <a href="leaderboard.html" class="nav-item nav-link active">Leaderboard</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Fitur Lain</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="feature.html" class="dropdown-item">Forum</a>
                        <a href="quote.html" class="dropdown-item">Berita Terbaru</a>
=======
                <a href="/" class="nav-item nav-link active">Beranda</a>
                <!-- <a href="/leaderboard" class="nav-item nav-link">Leaderboard</a> -->
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
>>>>>>> 86f9beee26fca756625136e95ecb18c90cc43baf
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
<<<<<<< HEAD
                            <a href="contact.html" class="nav-item nav-link">Profil Saya</a>
=======
                            <a href="/profile" class="nav-item nav-link">Profil Saya</a>
>>>>>>> 86f9beee26fca756625136e95ecb18c90cc43baf
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
<<<<<<< HEAD
    <!-- Navbar End -->

    <!-- Leaderboard Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-4">Leaderboard</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title"><center>Leaderboard</center></h5>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Rank</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Score</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Sample leaderboard data -->
                                    <tr>
                                        <td>1</td>
                                        <td>John Doe</td>
                                        <td>100</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Jane Smith</td>
                                        <td>95</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Alex Johnson</td>
                                        <td>90</td>
                                    </tr>
                                    <!-- Additional dummy data -->
                                    <tr>
                                        <td>4</td>
                                        <td>Maria Garcia</td>
                                        <td>85</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Michael Brown</td>
                                        <td>80</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>David Rodriguez</td>
                                        <td>75</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Mary Wilson</td>
                                        <td>70</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>James Martinez</td>
                                        <td>65</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Patricia Lopez</td>
                                        <td>60</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Robert Hernandez</td>
                                        <td>55</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Leaderboard End -->

    <!-- Footer Start -->
=======

    <div class="container mt-5">
        <h1 class="mb-4">Leaderboard</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Rank</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Total Nilai</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($leaderboard as $index => $entry)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $entry->user->name }}</td>
                        <td>{{ $entry->user->kelas }}</td>
                        <td>{{ $entry->total_nilai }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
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
>>>>>>> 86f9beee26fca756625136e95ecb18c90cc43baf
    <div class="container-fluid bg-dark text-body footer mt-0 pt-0 wow fadeIn" data-wow-delay="0.1s">    
    <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-12 text-center ">
                        &copy; <a href="#" class="text-center">Kraton Education</a>, All Right Reserved.
                    </div>
<<<<<<< HEAD
=======
                    <!-- <div class="col-md-6 text-center text-md-end">
                        Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                        <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                    </div> -->
>>>>>>> 86f9beee26fca756625136e95ecb18c90cc43baf
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

<<<<<<< HEAD
</body

=======
</html>
>>>>>>> 86f9beee26fca756625136e95ecb18c90cc43baf
