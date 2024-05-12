<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Kraton - Leaderboard</title>
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
                <a href="index.html" class="nav-item nav-link">Beranda</a>
                <a href="about.html" class="nav-item nav-link">Coba Kuis</a>
                <!-- Add leaderboard link here -->
                <a href="leaderboard.html" class="nav-item nav-link active">Leaderboard</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Fitur Lain</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="feature.html" class="dropdown-item">Forum</a>
                        <a href="quote.html" class="dropdown-item">Berita Terbaru</a>
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
                            <a href="contact.html" class="nav-item nav-link">Profil Saya</a>
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
    <div class="container-fluid bg-dark text-body footer mt-0 pt-0 wow fadeIn" data-wow-delay="0.1s">    
    <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-12 text-center ">
                        &copy; <a href="#" class="text-center">Kraton Education</a>, All Right Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

</body

