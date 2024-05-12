<html>
<head>
    <title>Dashboard Orang Tua</title>
</head>
<body>
    <h1>Dashboard Orang Tua</h1>
    @foreach($nilaiAnak as $namaAnak => $nilai)
        <h2>Riwayat Nilai {{ $namaAnak }}</h2>
        <table border="1">
            <tr>
                <th>Mata Pelajaran</th>
                <th>Nilai</th>
                <th>Waktu</th>
            </tr>
            @foreach($nilai as $item)
            <tr>
                <td>{{ $item->mata_pelajaran }}</td>
                <td>{{ $item->nilai }}</td>
                <td>{{ $item->created_at }}</td>
            </tr>
            @endforeach
        </table>
    @endforeach
</body>
</html>