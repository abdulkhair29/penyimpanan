@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ route("kelas.form") }}" class="btn btn-success float-right mb-4"><i class="fas fa-plus-circle"></i> Buat Kelas baru</a>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5><a href="{{ route("kelas.list") }}" class="text-white">TI VII P1</a></h5>
                        <p>online</p>
                    </div>
                <div class="card-body">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas ex unde est repudiandae cupiditate vel natus pariatur autem aliquid debitis iure voluptatibus voluptatem at aliquam voluptatum error, obcaecati totam dolorum?
                </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-danger float-right"><i class="far fa-trash-alt"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5><a href ="" class="text-white">TI VII P1</a></h5>
                        <p>online</p>
                    </div>
                <div class="card-body">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas ex unde est repudiandae cupiditate vel natus pariatur autem aliquid debitis iure voluptatibus voluptatem at aliquam voluptatum error, obcaecati totam dolorum?
                </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-danger float-right"><i class="far fa-trash-alt"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5><a href ="" class="text-white">TI VII P1</a></h5>
                        <p>online</p>
                    </div>
                <div class="card-body">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas ex unde est repudiandae cupiditate vel natus pariatur autem aliquid debitis iure voluptatibus voluptatem at aliquam voluptatum error, obcaecati totam dolorum?
                </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-danger float-right"><i class="far fa-trash-alt"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5><a href ="" class="text-white">TI VII P1</a></h5>
                        <p>online</p>
                    </div>
                <div class="card-body">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas ex unde est repudiandae cupiditate vel natus pariatur autem aliquid debitis iure voluptatibus voluptatem at aliquam voluptatum error, obcaecati totam dolorum?
                </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-danger float-right"><i class="far fa-trash-alt"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
