<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Quiz</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
        }
        h1 {
            margin-bottom: 20px;
        }
        .profile-info {
            margin-bottom: 20px;
            text-align: left;
        }
        .profile-info label {
            font-weight: bold;
        }
        .profile-info p {
            margin: 5px 0;
        }
        .profile-picture {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin: 0 auto 20px;
            overflow: hidden;
        }
        .profile-picture img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .btn-back {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #dc3545;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .btn-back:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="profile-picture">
            <img src="https://via.placeholder.com/150" alt="Foto Profil">
        </div>
        <div class="profile-info">
            <label>Nama:</label>
            <p>John</p>
        </div>
        <div class="profile-info">
            <label>Email:</label>
            <p>john@example.com</p>
        </div>
        <div class="profile-info">
            <label>Tanggal Lahir:</label>
            <p>01 Januari 1990</p>
        </div>
        <div class="profile-info">
            <label>Skor Tertinggi:</label>
            <p>95</p>
        <!-- Info profil lainnya sesuai kebutuhan -->
        <button class="btn-back">Back</button>
    </div>
</body>
</html>
