<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Kraton - Kreasi Education</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
                <!-- <a href="about.html" class="nav-item nav-link">Coba Kuis</a> -->
                <!-- <a href="service.html" class="nav-item nav-link">Fitur</a> -->
                <!-- <a href="project.html" class="nav-item nav-link">Project</a> -->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Fitur Lain</a>
                    <div class="dropdown-menu bg-light m-0">
                        <!-- <a href="feature.html" class="dropdown-item">Forum</a> -->
                        <a href="quote.html" class="dropdown-item">Berita Terbaru</a>
                        <!-- <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a> -->
                    </div>
                </div>
                <a href="/profile" class="nav-item nav-link">Profil Saya</a>
            </div>
            <form action="/logout" method="post">
            @csrf
                <button type="submit" id="logout" class="btn btn-danger rounded-0 py-4 px-lg-5 d-none d-lg-block">LOGOUT<i class="fa fa-arrow-right ms-3"></i></button>                    
            </form>
        </div>
    </nav>
    <!-- Navbar End -->


    <div class="container custom-card">
            <div class="custom-card-body">
                @if(count($pertanyaanUmum) > 0)
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center align-middle">Pertanyaan</th>
                                <th class="text-center align-middle">Piliahan A</th>
                                <th class="text-center align-middle">Piliahan B</th>
                                <th class="text-center align-middle">Piliahan C</th>
                                <th class="text-center align-middle">Piliahan D</th>
                                <th class="text-center align-middle">Jawaban Benar</th>
                                <th class="text-center align-middle">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pertanyaanUmum as $pertanyaanUmum)
                                <tr>
                                    <td class="text-center align-middle">{{ $pertanyaanUmum ->pertanyaan }}</td>
                                    <td class="text-center align-middle">{{ $pertanyaanUmum ->A }}</td>
                                    <td class="text-center align-middle">{{ $pertanyaanUmum ->B }}</td>
                                    <td class="text-center align-middle">{{ $pertanyaanUmum ->C }}</td>
                                    <td class="text-center align-middle">{{ $pertanyaanUmum ->D }}</td>
                                    <td class="text-center align-middle">{{ $pertanyaanUmum ->jawabanBenar }}</td>
                                    <td class="text-center align-middle">
                                        <button class="btn btn-danger" onclick="deleteUser({{ $pertanyaanUmum ->id }})">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p class="mt-3">Data pengguna tidak ditemukan.</p>
                @endif
            </div>
        </div>
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

    <script>
        function deleteUser(pertanyaanUmumID) {
            if (confirm("Apakah Anda yakin ingin menghapus pertanayaan umum ini?")) {
                var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                fetch(`/delete-pertanyaan-umum/${pertanyaanUmumID}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken,
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({ id: pertanyaanUmumID }),
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Refresh halaman atau lakukan tindakan lain jika penghapusan berhasil
                        location.reload(); // Contoh: Memuat ulang halaman
                    } else {
                        // Tampilkan pesan kesalahan jika diperlukan
                        alert(data.message);
                    }
                });
            }
        }
    </script>

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
