@extends('layouts.app')
@section('title', 'Contact Us')

@section('content')
<div class="text-center mb-4">
    <h2 class="text-danger fw-bold">Hubungi Kami</h2>
    <p class="text-secondary">Kami senang menerima saran dan pertanyaan Anda.</p>
</div>

<div class="row justify-content-center">
    <div class="col-md-6">
        <form>
            <div class="mb-3">
                <label class="form-label text-danger">Nama</label>
                <input type="text" class="form-control" placeholder="Masukkan nama Anda">
            </div>
            <div class="mb-3">
                <label class="form-label text-danger">Email</label>
                <input type="email" class="form-control" placeholder="Masukkan email Anda">
            </div>
            <div class="mb-3">
                <label class="form-label text-danger">Pesan</label>
                <textarea class="form-control" rows="4" placeholder="Tulis pesan Anda"></textarea>
            </div>
            <button class="btn btn-warning text-danger fw-bold w-100">Kirim Pesan</button>
        </form>
    </div>
</div>
@endsection
