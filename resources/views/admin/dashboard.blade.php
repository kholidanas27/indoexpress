@extends('layout.master')
@section('breadcumb')
<h1>Dashboard</h1>
<div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
</div>
@endsection
@section('content')
    <div class="card">
    <div class="card-body">
        <p>Selamat Datang di Dashboard Admin</p>
    </div>
    <div class="card-footer bg-whitesmoke">
    Indoexpress @2021
    </div>
</div>
@endsection