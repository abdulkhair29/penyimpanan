@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="matakuliah">Matakuliah</label>
                <input type="text" name="matakuliah" class="form-control">
            </div>
            <div class="form-group">
                <label for="noruang">No.Ruang</label>
                <input type="text" name="noruang" class="form-control">
            </div>
            <div class="form-group float-right">
                <button type="submit" class="btn btn-success"><i class="fas fa-feather-alt"></i> Simpan</button>
                <a href="{{ url()->previous() }}" class="btn btn-danger"><i class="fas fa-undo"></i> Batal</a>
            </div>
        </form>
    </div>
@endsection
