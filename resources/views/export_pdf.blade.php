<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Buku</title>
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
    <h1>Data Buku</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>id_buku</th>
                <th>kode_buku</th>
                <th>judul</th>
                <th>pengarang</th>
                <th>kategori</th>
                <th>created_at</th>
                <th>updated_at</th>
            </tr>
        </thead>
        <tbody>
            @foreach($buku as $index => $buku)
            <tr>
                <td>{{ $buku->id_buku }}</td>
                <td>{{ $buku->kode_buku }}</td>
                <td>{{ $buku->judul }}</td>
                <td>{{ $buku->pengarang }}</td>
                <td>{{ $buku->kategori }}</td>
                <td>{{ $buku->created_at }}</td>
                <td>{{ $buku->updated_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

