@extends('layout.master')
@section('breadcumb')
<h1>Data Kontainer</h1>
<div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="{{ route('admin.data_container') }}">Data Kontainer</a></div>
</div>
@endsection
@section('content')
    <div class="card">
    <div class="card-header">
        <h4>Daftar Kontainer</h4>
    </div>
    <div class="card-body">
    <div class="table-responsive">
        <a href="" class="btn btn-primary">Tambah Data</a>
        <br>
        <table class="table table-striped" id="table-1">
        <thead>
            <tr>
            <th class="text-center">
                #
            </th>
            <th>Nama Container</th>
            <th>Kode Kontainer</th>
            <th>Ukuran</th>
            <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($container as $c)
            <tr>
                <td>
                    {{ $c->id_container }}
                </td>
                <td> {{ $c->nama_container }}</td>
                <td class="align-middle">
                    {{ $c->kode_container }}
                </td>
                <td>
                    {{ $c->ukuran }}
                </td>
                <td>
                    <a href="#" class="btn btn-warning">Edit</a>
                    <a href="#" class="btn btn-danger">hapus</a>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    </div>
    <div class="card-footer bg-whitesmoke">
    This is card footer
    </div>
</div>
@endsection