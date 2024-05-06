<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Kuis - Quiz</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        .container {
            max-width: 800px;
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
        .quiz-history {
            text-align: left;
        }
        .quiz-history table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .quiz-history th,
        .quiz-history td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }
        .quiz-history th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Riwayat Kuis</h1>
        <div class="quiz-history">
            <table>
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Paket Soal</th>
                        <th>Skor</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01/05/2024</td>
                        <td>Matematika 01</td>
                        <td>90</td>
                    </tr>
                    <tr>
                        <td>02/05/2024</td>
                        <td>Matematika 02</td>
                        <td>85</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
