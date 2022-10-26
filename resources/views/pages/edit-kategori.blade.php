@extends('layouts.admin')

@section('title')
    Kategori
@endsection

@section('content')
    <div class="page-heading">
        <h3>Kategori</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tambah Kategori</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{route('admin.kategori.update', ['id' => $data->id])}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="basicInput">Nama Kategori</label>
                                        <input type="text" name="nama" class="form-control" id="basicInput" placeholder="Kategori" value="{{$data->name}}">
                                        @error('nama')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        </section>
    </div>
@endsection
