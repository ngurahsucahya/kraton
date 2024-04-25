<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Mata Pelajaran - Quiz</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f3f4f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            max-width: 400px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            padding: 40px;
            text-align: center;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 30px;
            color: #333;
        }
        .subject-list {
            list-style: none;
            padding: 0;
            margin-bottom: 30px;
            text-align: left;
        }
        .subject-list li {
            margin-bottom: 10px;
        }
        .subject-list li label {
            display: block;
            padding: 10px 20px;
            background-color: #f5f5f5;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }
        .subject-list li label:hover {
            background-color: #e0e0e0;
        }
        .subject-list li label input[type="radio"] {
            display: none;
        }
        .subject-list li label input[type="radio"] + span {
            vertical-align: middle;
            margin-left: 5px;
        }
        .btn-submit {
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
        .btn-submit:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Pilih Mata Pelajaran</h1>
        <ul class="subject-list">
            <li>
                <label>
                    <input type="radio" name="subject" value="math">
                    <span>Pengetahuan Umum</span>
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="subject" value="science">
                    <span>Matematika</span>
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="subject" value="history">
                    <span>Ilmu Pengetahuan Alam</span>
                </label>
            </li>
            <!-- Tambahkan mata pelajaran lainnya sesuai kebutuhan -->
        </ul>
        <a href="#" class="btn-submit" onclick="startQuiz()">Mulai Kuis</a>
    </div>

    <script>
        function startQuiz() {
            // Mendapatkan nilai mata pelajaran yang dipilih
            var selectedSubject = document.querySelector('input[name="subject"]:checked');
            if (selectedSubject) {
                // Redirect ke halaman kuis dengan menyertakan parameter mata pelajaran yang dipilih
                window.location.href = 'quiz.html?subject=' + selectedSubject.value;
            } else {
                alert('Silakan pilih satu mata pelajaran untuk memulai kuis.');
            }
        }
    </script>
</body>
</html>
