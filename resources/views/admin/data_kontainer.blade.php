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
        <table class="table table-striped" id="table-1">
        <thead>
            <tr>
            <th class="text-center">
                #
            </th>
            <th>Task Name</th>
            <th>Progress</th>
            <th>Members</th>
            <th>Due Date</th>
            <th>Status</th>
            <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>
                1
            </td>
            <td>Create a mobile app</td>
            <td class="align-middle">
                sdkjfnsd
            </td>
            <td>
                sdhsdk
            </td>
            <td>2018-01-20</td>
            <td><div class="badge badge-success">Completed</div></td>
            <td><a href="#" class="btn btn-secondary">Detail</a></td>
            </tr>
            <tr>
            <td>
                2
            </td>
            <td>Redesign homepage</td>
            <td class="align-middle">
               sdfjsdf
            </td>
            <td>
                dsfhsdhs
            </td>
            <td>2018-04-10</td>
            <td>
                <div class="badge badge-info">Todo</div>
            </td>
            <td>
                <a href="#" class="btn btn-secondary">Detail</a>
            </td>
            </tr>
            <tr>
            <td>
                3
            </td>
            <td>Backup database</td>
            <td class="align-middle">
               djhgfsdfsjdfd
            </td>
            <td>
                sdkjfhgsajkhf
            </td>
            <td>2018-01-29</td>
            <td>
                <div class="badge badge-warning">In Progress</div>
            </td>
            <td><a href="#" class="btn btn-secondary">Detail</a>
            </td>
            </tr>
            <tr>
            <td>
                4
            </td>
            <td>Input data</td>
            <td class="align-middle">
                dgfhsdfd
            </td>
            <td>
                ashfas
            </td>
            <td>2018-01-16</td>
            <td>
                <div class="badge badge-success">Completed</div>
            </td>
            <td>
                <a href="#" class="btn btn-secondary">Detail</a>
            </td>
            </tr>
        </tbody>
        </table>
    </div>
    <div class="card-footer bg-whitesmoke">
    This is card footer
    </div>
</div>
@endsection