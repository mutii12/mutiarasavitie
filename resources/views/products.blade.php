@extends('layouts.app')
@section('title', 'Products')

@section('content')
<h2 class="text-center text-danger fw-bold mb-4">Daftar Produk Kami</h2>

<div class="row">
    @foreach ([
        ['img' => 'sususegar.jpeg', 'name' => 'Susu Segar', 'price' => 'Rp 25.000'],
        ['img' => 'rotitawar.jpeg', 'name' => 'Roti Tawar', 'price' => 'Rp 15.000'],
        ['img' => 'detergent.jpeg', 'name' => 'Detergen', 'price' => 'Rp 30.000'],
        ['img' => 'keripikentang.jpeg', 'name' => 'Keripik Kentang', 'price' => 'Rp 10.000'],
        ['img' => 'pastagigi.jpeg', 'name' => 'Pasta Gigi', 'price' => 'Rp 12.000'],
        ['img' => 'sabunmandi.jpeg', 'name' => 'Sabun Mandi', 'price' => 'Rp 9.000'],
    ] as $p)
    <div class="col-md-4 mb-4">
        <div class="card h-100 border-0 shadow-sm">
            <img src="{{ asset('images/' . $p['img']) }}" 
                 class="card-img-top img-fixed" 
                 alt="{{ $p['name'] }}">
            <div class="card-body text-center">
                <h5 class="card-title text-danger fw-bold">{{ $p['name'] }}</h5>
                <p class="card-text">{{ $p['price'] }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
