@extends('layouts.app')
@section('title', 'About')

@section('content')
<div class="row align-items-center">
    <div class="col-md-6">
        <h2 class="text-danger fw-bold">Tentang Mitra Buana</h2>
        <p class="text-secondary">
            Mitra Buana adalah supermarket modern yang menyediakan kebutuhan rumah tangga, makanan, minuman, dan produk segar.
            Kami berkomitmen memberikan pelayanan terbaik dan produk berkualitas untuk seluruh pelanggan Indonesia.
        </p>
        <ul class="list-unstyled">
            <li>🛒 Produk Segar Setiap Hari</li>
            <li>🚚 Pengantaran Cepat</li>
            <li>💳 Pembayaran Aman & Praktis</li>
        </ul>
    </div>
    <div class="col-md-6 text-center">
        <img src="{{ asset('images/mb.png') }}" alt="Mitra Buana" class="img-fluid rounded shadow-sm">
    </div>
</div>
@endsection
