<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Paket Soal - Quiz</title>
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
        .package-list {
            list-style: none;
            padding: 0;
            margin-bottom: 30px;
            text-align: left;
        }
        .package-list li {
            margin-bottom: 10px;
        }
        .package-list li label {
            display: block;
            padding: 10px 20px;
            background-color: #f5f5f5;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }
        .package-list li label:hover {
            background-color: #e0e0e0;
        }
        .package-list li label input[type="radio"] {
            display: none;
        }
        .package-list li label input[type="radio"] + span {
            vertical-align: middle;
            margin-left: 5px;
        }
        .btn-start {
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
        .btn-start:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Pilih Paket Soal</h1>
        <ul class="package-list">
            <li>
                <label>
                    <input type="radio" name="package" value="easy">
                    <span>Mudah (10 soal)</span>
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="package" value="medium">
                    <span>Sedang (20 soal)</span>
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="package" value="hard">
                    <span>Sulit (30 soal)</span>
                </label>
            </li>
        </ul>
        <a href="#" class="btn-start">Mulai Kuis</a>
    </div>
</body>
</html>
