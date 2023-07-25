@extends('layouts.app')
@section('content')
@include('menu')
<div class="container">
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    {{-- </div> --}}
{{-- <h3>Pengertian perpustakaan menurut para ahli</h3>
    <p>
    <h4>Perpustakaan</h4>
        Perpustakaan Perguruan Tinggi merupakan unit kerja pelaksana teknis (UPT) Perguruan Tinggi yang bersama-sama
		dengan unit lain turut melaksanakan Tri Dharma Perguruan Tinggi, yaitu: pendidikan, penelitian, dan pengabdian
		kepada masyarakat dengan cara memilah, menghimpun, mengolah, merawat, serta menyebarluaskan sumber informasi kepada
		lembaga induknya pada khususnya dan sivitas akademika pada umumnya. Kelima tugas tersebut dilaksanakan dengan
		tata cara administrasi dan organisasi yang berlaku bagi penyelenggaraan sebuah perpustakaan.
    <p>
    <h4>Perpustakaan IT Telkom Surabaya</h4>
        Perpustakaan IT Telkom Surabaya [ ITTS] sebagai salah satu perpustakaan perguruan tinggi swasta di Indonesia
		selama ini juga telah melaksanakan kelima tugas tersebut dalam kegiatan di perpustakaannya untuk mendukung
		terwujudnya Tri Dharma Perguruan Tinggi. Berbagai upaya dilakukan oleh Perpustakaan Universitas sendiri berada
		ditempat yang cukup representative, mudah diakses baik oleh mahasiswa ataupun kalangan civitas akademika USM.
		Disamping itu juga memiliki ribuan koleksi mulai dari Buku, Jurnal, Majalah, Dokumen Penelitian dan berbagai sumber
		referensi lain guna menunjang proses pembelajaran di USM.

    <p>
        Perhatian pimpinan Yayasan dan Universitas dalam pengembangan dan peningkatan layanan Perpustakaan semakin
		membaik 5 tahun belakangan ini, hal ini ditunjukan dengan koleksi bahan perpustakaan yang meningkat cukup baik
		ditiap tahunnya yaitu dengan rata-rata 5,18 % pertahun. UPT Perpustakaan Universitas Semarang sampai 10 Oktober 2018
		memiliki 24.421 Judul koleksi dengan jumlah total 38.668 eksemplar
    <p>
    <h4>Perpustakaan Menurut UU NO 43. THN. 2007</h4>
    Perpustakaan adalah institusi yang mengumpulkan pengetahuan tercetak dan terekam, mengelolanya dengan cara khusus guna
    memenuhi kebutuhan intelektualitas para penggunanya melalui berbagai cara interaksi pengetahuan. --}}
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('gambar/slide1.jpg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('gambar/slide2.jpg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('gambar/slide3.jpg') }}"class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</div>

@endsection
