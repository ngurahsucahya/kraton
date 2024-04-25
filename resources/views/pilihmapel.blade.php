<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Mata Pelajaran</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: "Comic Sans MS", cursive, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        /* Warna latar belakang kartu */
        .card {
            background-color: #f8f9fa;
            border: 1px solid #eaeaea;
            border-radius: 10px;
        }

        @media (max-width: 767px) {
            .mb-md-4 {
                margin-bottom: 1.5rem; 
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h1 class="text-center mb-4">Pilih Mata Pelajaran</h1>

        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-4 mb-4 mb-md-0">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Pengetahuan Umum</h5>
                        <p class="card-text">Berisi soal-soal pengetahuan Umum</p>
                        <a href="/pengetahuan-umum" class="btn btn-primary">Mulai</a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4 mb-4 mb-md-0">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Matematika</h5>
                        <p class="card-text">Berisi soal-soal hitungan</p>
                        <a href="/matematika" class="btn btn-primary">Mulai </a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">IPA</h5>
                        <p class="card-text">Berisi soal-soal seputar alam</p>
                        <a href="/ipa" class="btn btn-primary">Mulai</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>


