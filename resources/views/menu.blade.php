<!--awal MENU NAVBAR-->
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/home">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/buku">Data Buku</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/anggota">Data Anggota</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/petugas">Data Petugas</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/pinjam">Data Peminjaman</a>
                </li>
{{--
                <li class="nav-item">
                    <a class="nav-link" href="/logout">Logout</a>
                </li> --}}
                <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                    @csrf
                    {{-- @method('DELETE') --}}
                    <button class="btn btn-danger">Logout</button>
                </form>

            </ul>
        </div>
    </nav>
</div>
<!--akhir MENU NAVBAR-->
