<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selesai - Quiz</title>
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
        .score-container {
            margin-bottom: 30px;
        }
        .score {
            font-size: 48px;
            font-weight: bold;
            color: #007bff;
            margin-bottom: 10px;
        }
        .message {
            font-size: 20px;
            margin-bottom: 20px;
        }
        .btn-retry {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }
        .btn-retry:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selesai!</h1>
        <div class="score-container">
            <p class="score">Skor Anda: 95</p>
        </div>
        <p class="message">Selamat, Anda telah menyelesaikan kuis.</p>
        <a href="#" class="btn-retry">Coba Lagi</a>
    </div>
</body>
</html>
