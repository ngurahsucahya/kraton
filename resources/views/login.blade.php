<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Masuk Kraton</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body, html {
      height: 100%;
      margin:0;
      background-color: #ECECEC;
    }
    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100%;
    }
    
    .card-title {
      text-align: center; /* Menengahkan teks dalam card */
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
        <img src="{{ asset('images/logo.png') }}" alt="Kraton" width="100" height="100" class="mx-auto d-block">

          <!-- <h4 class="card-title">Domba Premium</h4> -->
          <form action="/login" method="post">
            @csrf
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control" id="username" name="username" autofocus required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary text">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
