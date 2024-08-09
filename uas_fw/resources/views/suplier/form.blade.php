@extends('layouts.master')
@section('title','Tambah suplier')
@section('judul','Tambah Data Suplier')
@section('bc')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/home/">Home</a></li>
        <li class="breadcrumb-item"><a href="/suplier/">Data Suplier</a></li>
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
            <form method="post" action="/suplier/store/" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Kode Suplier</label>
                    <input type="text" class="form-control" name="kdsuplier">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Suplier</label>
                    <input type="text" class="form-control" name="namasuplier">
                </div>
                <div class="mb-3">
                    <label class="form-label">Handphone</label>
                    <input type="number" class="form-control" name="hp">
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat</label>
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