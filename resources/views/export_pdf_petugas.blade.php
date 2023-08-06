<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Petugas</title>
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
    <h1>Data Petugas</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>id_petugas</th>
                <th>nama_petugas</th>
                <th>hp</th>
                <th>created_at</th>
                <th>updated_at</th>
            </tr>
        </thead>
        <tbody>
            @foreach($petugas as $index => $petugas)
            <tr>
                <td>{{ $petugas->id_petugas }}</td>
                <td>{{ $petugas->nama_petugas }}</td>
                <td>{{ $petugas->hp }}</td>
                <td>{{ $petugas->created_at }}</td>
                <td>{{ $petugas->updated_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

