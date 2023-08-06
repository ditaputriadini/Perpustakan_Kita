<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Anggota</title>
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
    <h1>Data Anggota</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>id_anggota</th>
                <th>nim</th>
                <th>nama_anggota</th>
                <th>prodi</th>
                <th>hp</th>
                <th>created_at</th>
                <th>updated_at</th>
            </tr>
        </thead>
        <tbody>
            @foreach($anggota as $index => $anggota)
            <tr>
                <td>{{ $anggota->id_anggota }}</td>
                <td>{{ $anggota->nim }}</td>
                <td>{{ $anggota->nama_anggota }}</td>
                <td>{{ $anggota->prodi }}</td>
                <td>{{ $anggota->hp }}</td>
                <td>{{ $anggota->created_at }}</td>
                <td>{{ $anggota->updated_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

