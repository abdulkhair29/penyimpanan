@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="">
            <div class="form-group">
                <label for="pertemuan">Pertemuan</label>
                <input type="text" name="pertemuan" class="form-control">
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" name="tanggal" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="materi"></label>
                <textarea name="materi" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group float-right">
                <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan</button>
                <a href="{{ url()->previous() }}" class="btn btn-danger"><i class="fas fa-undo"></i> Batal</a>
            </div>
        </form>
    </div>
@endsection
