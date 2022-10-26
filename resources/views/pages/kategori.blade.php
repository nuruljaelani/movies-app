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
            <div class="col-12 col-lg-12">
                <div class="col-3">
                    <a href="{{ route('admin.kategori.create') }}" class="btn btn-primary">
                        Tambah Kategori
                    </a>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Kategori</h4>
                    </div>
                    <div class="card-content">

                        <!-- Table with no outer spacing -->
                        <div class="table-responsive">
                            <table class="table mb-0 table-lg">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $item)
                                        <tr>
                                            <td class="text-bold-500">{{$loop->iteration}}</td>
                                            <td>{{$item->name}}</td>
                                            <td class="text-bold-500">
                                                <a href="{{route('admin.kategori.edit', ['id' => $item->id])}}" class="btn btn-primary">
                                                    Edit
                                                </a>
                                                <form action="{{route('admin.kategori.delete', ['id' => $item->id])}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">
                                                        Hapus
                                                    </button>
                                                </form>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
