@extends('layouts.master')
@section('title','Tambah petugas')
@section('judul','Tambah petugas')
@section('bc')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Data petugas</a></li>
        <li class="breadcrumb-item active">Tambah petugas</li>
    </ol>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">


        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
            </button>
        </div>
        </div>
        <div class="card-body">
            <form method="post" action="/petugas/store/" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Kode petugas</label>
                    <input type="text" class="form-control" name="kdpetugas">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama petugas</label>
                    <input type="text" class="form-control" name="namapetugas">
                </div>
                <div class="mb-3">
                    <label class="form-label">Hp</label>
                    <input type="number" class="form-control" name="hp">
                </div>
                <div class="mb-3">
                    <label class="form-label">email</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label class="form-label">umur</label>
                    <input type="number" class="form-control" name="umur">
                </div>
                <div class="mb-3">
                    <label class="form-label">alamat</label>
                    <input type="text" class="form-control" name="alamat">
                </div>
                
                
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
        <!-- /.card-body -->
        {{-- <div class="card-footer">
        Footer
        </div> --}}
        <!-- /.card-footer-->
    </div>
@endsection