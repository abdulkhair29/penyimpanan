@extends('layouts.app')

@section('content')
    <div class="container">
        <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link active" href="#pertemuan" data-toggle="tab">Pertemuan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#peserta" data-toggle="tab">Peserta</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#absensi" data-toggle="tab">Absensi</a>
            </li>
          </ul>

      <div class="jumbotron bg-primary text-white">
        <h1>nama kelas</h1>
        <h5>No ruangan : xxx</h5>
        <p>Kode Kelas : xxxx</p>
      </div>

      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="pertemuan" role="tabpanel">
            <a href="{{ route("pertemuan.form") }}" class="btn btn-outline-success float-right mb-4"><i class="fas fa-plus"></i> Buat pertemuan</a>
            <div class="clearfix"></div>
                <div class="card mb-2">
                  <div class="card-body">
                    <h3><a href="{{ route("absensi.form") }}">Pertemuan 1</a></h3>
                    <span class="text-muted">Tanggal 01/01/2020</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae consequuntur itaque deserunt. Laudantium quidem iure, commodi natus autem labore, quo veritatis temporibus non eveniet fugiat quis repellendus facere placeat ratione.</p>
                  </div>
                  <div class="card-footer">
                    <a href="#" class="btn btn-danger float-right"><i class="fas fa-trash-alt"></i> Hapus</a>
                  </div>
                </div>
        </div>


        <div class="tab-pane fade" id="peserta" role="tabpanel">
            <h2>Dosen</h2>
            <hr>
            <ul class="list-group">
              <li class="list-group-item">Nama Dosen</li>
            </ul>

            <div class="d-flex justify-content-between mt-4">
            <h2>Mahasiswa</h2>
              <div>
                <span class="text-muted">1 Mahasiswa</span>
                <a href="{{ route("peserta.invite") }}" class="btn btn-outline-primary"><i class="fas fa-user-plus"></i></a>
              </div>
            </div>
            <hr>
            <ul class="list-group">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="{{ route("peserta.detail") }}"><span>Mahasiswa 1</span></a>
              <a href="" class="btn btn-danger"><i class="far fa-trash-alt"></i> Hapus</a>
              </li>
            </ul>
        </div>


        <div class="tab-pane fade" id="absensi" role="tabpanel">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <td>Nama</td>
                  <td>Pertemuan 1</td>
                  <td>Pertemuan 2</td>
                  <td>Pertemuan 3</td>
                  <td>Pertemuan 4</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Bagus</td>
                  <td>H</td>
                  <td>A</td>
                  <td>A</td>
                  <td>I</td>
                </tr>
              </tbody>
            </table>
        </div>

      </div>
    </div>
@endsection
