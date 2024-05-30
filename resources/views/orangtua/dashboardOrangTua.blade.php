<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Profil Saya - Kraton Education</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('template/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('template/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('template/css/style.css') }}" rel="stylesheet">

    <!-- Your Custom Stylesheet -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

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
                <!-- <a href="about.html" class="nav-item nav-link">Coba Kuis</a> -->
                <!-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Fitur Lain</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="feature.html" class="dropdown-item">Forum</a>
                        <a href="quote.html" class="dropdown-item">Berita Terbaru</a>
                    </div>
                </div> -->
                <a href="{{ route('profile.show') }}" class="nav-item nav-link">Profil Saya</a>
            </div>
            <form action="/logout" method="post">
                @csrf
                <button type="submit" id="logout" class="btn btn-danger rounded-0 py-4 px-lg-5 d-none d-lg-block">LOGOUT<i class="fa fa-arrow-right ms-3"></i></button>
            </form>
        </div>
    </nav>
    <!-- Navbar End -->
    <div class="container">
        <h1 class="mt-5">Dashboard Orang Tua</h1>
        @foreach($nilaiAnak as $namaAnak => $nilai)
            <div class="mt-4">
                <h2>Riwayat Nilai {{ $namaAnak }}</h2>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Mata Pelajaran</th>
                                <th scope="col">Poin</th>
                                <th scope="col">Waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($nilai as $item)
                            <tr>
                                <td>{{ $item->mata_pelajaran }}</td>
                                <td>{{ $item->nilai }}</td>
                                <td>{{ $item->created_at }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endforeach
    </div>


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

    <!-- Bootstrap JS -->
    <script src="{{ asset('template/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>