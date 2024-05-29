<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaderboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Ensure you have your CSS setup correctly -->
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Leaderboard</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Rank</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Total Nilai</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($leaderboard as $index => $entry)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $entry->user->name }}</td>
                        <td>{{ $entry->user->kelas }}</td>
                        <td>{{ $entry->total_nilai }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
