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
                <th>Id</th>
                <th>Kode Buku</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Kategori</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($buku as $index => $buku)
                <tr>
                    <td align="center">{{ $index + 1 }}</td>
                    <td>{{ $buku->Kode_Buku}}</td>
                    <td>{{ $buku->Judul }}</td>
                    <td>{{ $buku->Pengarang }}</td>
                    <td>{{ $buku->Kategori }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
