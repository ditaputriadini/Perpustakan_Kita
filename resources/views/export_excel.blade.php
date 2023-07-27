<table>
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
                <td>{{ $index + 1 }}</td>
                <td>{{ $buku->Kode_Buku}}</td>
                <td>{{ $buku->Judul }}</td>
                <td>{{ $buku->Pengarang }}</td>
                <td>{{ $buku->Kategori }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
