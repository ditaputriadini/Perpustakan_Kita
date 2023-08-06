<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Peminjaman</title>
    <style>
        html {
            font-size: 12px;
        }

        .table {
            border-collapse: collapse !important;
            width: 100%;
        }

        .table-bordered th,
        .table-bordered td {
            padding: 0.5rem;
            border: 1px solid black !important;
        }
    </style>
</head>
<body>
    <h1>Data Peminjaman</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>id_pinjam</th>
                <th>id_petugas</th>
                <th>id_anggota</th>
                <th>id_buku</th>
                <th>created_at</th>
                <th>updated_at</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pinjam as $index => $pinjam)
            <tr>
                <td>{{ $pinjam->id_pinjam }}</td>
                <td>{{ $pinjam->id_petugas }}</td>
                <td>{{ $pinjam->id_anggota }}</td>
                <td>{{ $pinjam->id_buku }}</td>
                <td>{{ $pinjam->created_at }}</td>
                <td>{{ $pinjam->updated_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

