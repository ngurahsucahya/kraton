<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Masuk Kraton</title>
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <style>
    body, html {
      height: 100%;
      margin:0;
      background-color: #fff1e0;
    }
    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100%;
    }
    .card {
      max-width: 800px; /* Lebar maksimum card */
    }
    .card-body {
      display: flex;
      align-items: center;
      flex-direction: column; /* Menjadikan konten dalam satu kolom */
    }
    .card-title {
      text-align: center; /* Menengahkan teks dalam card */
    }
    .image-container {
      padding: 20px;
    }
    .image-container img {
      width: 100px;
      height: auto;
    }
    .btn-login {
      width: 100%; /* Mengatur lebar tombol menjadi 100% */
    }
    @media (max-width: 768px) {
      .card-body {
        flex-direction: column;
        align-items: center;
      }
      .image-container {
        margin-bottom: 20px; /* Jarak antara gambar dan form saat layar kecil */
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="card w-50">
      <div class="card-body">
        <div class="image-container">
          <img src="{{ asset('images/logo.png') }}" alt="Kraton">
        </div>
        <form action="/login" method="post" class="w-100">
          @csrf
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" autofocus required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
          <button type="submit" class="btn btn-primary btn-login">Login</button>
          <div class="mt-3 text-center">
            Don't you have any account? <a href="/register">Register here</a>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
