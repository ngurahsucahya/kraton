<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Mata Pelajaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
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
                        <p class="card-text">Berisi soal-soal pengetahuan umum Indonesia dan Dunia</p>
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
                        <p class="card-text">Berisi soal-soal seputar alama</p>
                        <a href="/ipa" class="btn btn-primary">Mulai</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
