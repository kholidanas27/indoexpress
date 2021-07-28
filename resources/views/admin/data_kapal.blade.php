@extends('layout.master')
@section('breadcumb')
<h1>Data Kapal Cargo</h1>
<div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="{{ route('admin.data_container') }}">Data Kapal</a></div>
</div>
@endsection
@section('content')
    <div class="card">
    <div class="card-header">
        <h4>Daftar Kapal</h4>
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
            <th>Nama Kapal Cargo</th>
            <th>Jenis Kapal Cargo</th>
            <th>Kapasitas</th>
            <th>Action</th>
            </tr>
        </thead>
         <tbody>
            @foreach($kapal as $k)
            <tr>
                <td>
                    {{ $k->id_cargo }}
                </td>
                <td> {{ $k->nama_cargo }}</td>
                <td class="align-middle">
                    {{ $k->jenis_cargo }}
                </td>
                <td>
                    {{ $k->kapasitas }}
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