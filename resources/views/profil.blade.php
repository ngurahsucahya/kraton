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
                <a href="/" class="nav-item nav-link">Beranda</a>
                @auth 
                    @if(Auth::check())
                        @php
                            $role = Auth::user()->role;
                        @endphp

                        @if(in_array($role, ['Orang Tua', 'Admin']))
                        @elseif($role === 'Siswa')
                        <a href="/leaderboard" class="nav-item nav-link">Leaderboard</a>                            
                        @endif
                    @endif
                @endauth
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Fitur Lain</a>
                    <div class="dropdown-menu bg-light m-0">
                        <!-- <a href="feature.html" class="dropdown-item">Forum</a> -->
                        <a href="quote.html" class="dropdown-item">Berita Terbaru</a>
                    </div>
                </div>
                <!-- <a href="{{ route('profile.show') }}" class="nav-item nav-link">Profil Saya</a> -->
            </div>
            <form action="/logout" method="post">
                @csrf
                <button type="submit" id="logout" class="btn btn-danger rounded-0 py-4 px-lg-5 d-none d-lg-block">LOGOUT<i class="fa fa-arrow-right ms-3"></i></button>
            </form>
        </div>
    </nav>
    <!-- Navbar End -->

   <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>{{ __('Profil Saya') }}</span>
                    <a href="{{ route('profile.edit') }}" class="btn btn-sm btn-warning">
                        <i class="fas fa-edit"></i>
                    </a>
                </div>

                <div class="card-body">
                    @if(session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>Nama:</th>
                                    <td>{{ Auth::user()->name }}</td>
                                </tr>
                                <tr>
                                    <th>Email:</th>
                                    <td>{{ Auth::user()->email }}</td>
                                </tr>
                                <tr>
                                    <th>Kelas:</th>
                                    <td>{{ Auth::user()->kelas }}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal Lahir:</th>
                                    <td>{{ Auth::user()->tanggal_lahir }}</td>
                                </tr>
                                <tr>
                                    <th>Foto Profil:</th>
                                    <td><img src="{{ asset('images/profil/' . $user->profile_photo_path) }}" alt="Profil" class="img-fluid" width="100"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @auth
        @php
            $role = Auth::user()->role;
        @endphp
        @if($role === 'Siswa')
            <div class="row justify-content-center mt-4 mb-4">
                <div class="col-md-8">
                    <a href="{{ route('riwayat.pengetahuan', ['id_user' => Auth::user()->id]) }}" class="btn btn-primary">Lihat Riwayat Nilai</a>
                </div>
            </div>
        @elseif(in_array($role, ['Orang Tua', 'Admin']))
            <div class="row justify-content-center mt-4 mb-4">
            </div>
        @endif
    @endauth

</div>

    <!-- Content End -->
     <!-- Tombol untuk menuju ke halaman riwayat nilai -->
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
