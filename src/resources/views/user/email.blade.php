@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Undang Mahasiswa</h1>
        <hr>
        <form action="" method="post">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="form-group d-flex justify-content-between">
                <a href="{{ url()->previous() }}" class="btn btn-danger"><i class="fas fa-chevron-left"></i> Kembali</a>
                <button type="submit" class="btn btn-success">
                    <i class="fas fa-user-plus"></i> Undang
                </button>
            </div>
        </form>
    </div>
@endsection
