@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Peserta</h1>
        <hr>
        <form action="" method="post">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
        </form>
        <a href="{{ url()->previous() }}"class="btn btn-danger"><i class="fas fa-chevron-left"></i> Kembali</a>
    </div>
@endsection
