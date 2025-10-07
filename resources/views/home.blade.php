@extends('layouts.app')
@section('title', 'Home')

@section('content')
<div class="text-center">
    <h1 class="text-danger fw-bold">Selamat Datang di Mitra Buana</h1>
    <p class="lead text-secondary">Belanja kebutuhan harian Anda dengan nyaman dan hemat!</p>

    <div class="row mt-5 justify-content-center">
        @foreach ([
            ['img' => 'makanansegar.jpeg', 'title' => 'Produk Segar', 'desc' => 'Buah dan sayur berkualitas setiap hari.'],
            ['img' => 'makananringan.jpeg', 'title' => 'Makanan Ringan', 'desc' => 'Cemilan dan minuman kesukaan Anda.'],
            ['img' => 'kebutuhanrumah.jpeg', 'title' => 'Kebutuhan Rumah', 'desc' => 'Produk kebersihan & perawatan rumah.'],
        ] as $item)
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow-sm h-100">
                {{-- 🔧 Gambar lokal dengan ukuran seragam --}}
                <img src="{{ asset('images/' . $item['img']) }}" 
                     class="card-img-top img-fixed" 
                     alt="{{ $item['title'] }}">
                <div class="card-body text-center">
                    <h5 class="card-title text-danger fw-bold">{{ $item['title'] }}</h5>
                    <p class="card-text">{{ $item['desc'] }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
