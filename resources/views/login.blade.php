<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Sign In</title>
  <!-- Bootstrap core CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <style>
    body {
      font-family: "Comic Sans MS", cursive, sans-serif;
    }
    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .form-signin {
      width: 100%;
      max-width: 330px;
      padding: 15px;
      margin: auto;
      border: 1px solid #eaeaea;
      border-radius: 10px;
      background-color: #f8f9fa;
    }
    .form-signin-heading {
      margin-bottom: 20px;
      text-align: center;
      color: #007bff;
    }
    .form-control {
      position: relative;
      box-sizing: border-box;
      height: auto;
      padding: 10px;
      font-size: 16px;
    }
    .form-control:focus {
      z-index: 2;
    }
    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }
    .btn-primary:hover {
      background-color: #0056b3;
      border-color: #0056b3;
    }
    .btn-register {
      background-color: #28a745;
      border-color: #28a745;
      color: #ffffff; /* Warna teks putih */
    }
    .btn-register:hover {
      background-color: #218838;
      border-color: #218838;
    }
  </style>
</head>
<body class="text-center">
  <div class="container">
    <form class="form-signin" action="/login" method="post">
      <img src="{{ asset('images/logo.png') }}" alt="Kraton" width="100" height="100" class="mb-4">
      <h1 class="h3 mb-3 font-weight-normal form-signin-heading">Masuk Kraton</h1>
        <label for="username" class="sr-only">Username</label>
        <input type="text" id="username" class="form-control mb-2" placeholder="Username" name="username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control mb-2" placeholder="Password" name="password" required>
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Ingat saya
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Masuk</button>
      <a href="#" class="btn btn-lg btn-register btn-block mt-3">Daftar</a>
    </form>
  </div>
</body>
</html>



