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
                <a href="/" class="nav-item nav-link active">Beranda</a>
                <a href="/kuistrial" class="nav-item nav-link">Coba Kuis</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Fitur Lain</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="feature.html" class="dropdown-item">Forum</a>
                        <a href="quote.html" class="dropdown-item">Berita Terbaru</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Tim Pengembang</a>
            </div>
            <a href="/login" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">MASUK/DAFTAR<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Leaderboard Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary">Leaderboard</h6>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title text-center">Leaderboard</h5>
                        </div>
                        <div class="card-body">
                            <table class="table" id="leaderboardTable">
                                <thead>
                                    <tr>
                                        <th scope="col">Peringkat</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Skor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Data akan diisi oleh JavaScript -->
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-between">
                                <button id="prevBtn" class="btn btn-primary" onclick="prevPage()">Previous</button>
                                <button id="nextBtn" class="btn btn-primary" onclick="nextPage()">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('template/js/main.js')}}"></script>

    <!-- Pagination Script -->
    <script>
        // Dummy data for leaderboard
        const leaderboardData = [
            { rank: 1, name: "Student1", score: 1500 },
            { rank: 2, name: "Student2", score: 1450 },
            { rank: 3, name: "Student3", score: 1400 },
            { rank: 4, name: "Student4", score: 1350 },
            { rank: 5, name: "Student5", score: 1300 },
            { rank: 6, name: "Student6", score: 1250 },
            { rank: 7, name: "Student7", score: 1200 },
            { rank: 8, name: "Student8", score: 1150 },
            { rank: 9, name: "Student9", score: 1100 },
            { rank: 10, name: "Student10", score: 1050 },
            { rank: 11, name: "Student11", score: 1000 },
            { rank: 12, name: "Student12", score: 950 },
            { rank: 13, name: "Student13", score: 900 },
            { rank: 14, name: "Student14", score: 850 },
            { rank: 15, name: "Student15", score: 800 }        ];

        let currentPage = 1;
        const rowsPerPage = 10;

        function displayTable(page) {
            const tableBody = document.querySelector("#leaderboardTable tbody");
            tableBody.innerHTML = "";
            const start = (page - 1) * rowsPerPage;
            const end = start + rowsPerPage;
            const paginatedItems = leaderboardData.slice(start, end);

            paginatedItems.forEach(item => {
                const row = document.createElement("tr");
                row.innerHTML = `<td>${item.rank}</td><td>${item.name}</td><td>${item.score}</td>`;
                tableBody.appendChild(row);
            });

            for (let i = paginatedItems.length; i < rowsPerPage; i++) {
                const emptyRow = document.createElement("tr");
                emptyRow.innerHTML = `<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>`;
                tableBody.appendChild(emptyRow);
            }

            document.getElementById("prevBtn").disabled = page === 1;
            document.getElementById("nextBtn").disabled = end >= leaderboardData.length;
        }

        function nextPage() {
            currentPage++;
            displayTable(currentPage);
        }

        function prevPage() {
            currentPage--;
            displayTable(currentPage);
        }

        // Initial display
        displayTable(currentPage);
    </script>
</body>
</html>









