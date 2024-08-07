@extends('layouts.master')
@section('title','Tambah obat keluar')
@section('judul','Tambah obat keluar')
@section('bc')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Data obat keluar</a></li>
        <li class="breadcrumb-item active">Tambah obat keluar</li>
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
                    <label class="form-label">Kode obat</label>
                    <input type="text" class="form-control" name="kdobat">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama obat</label>
                    <input type="text" class="form-control" name="namaobat">
                </div>
                <div class="mb-3">
                    <label class="form-label">jenis obat</label>
                    <input type="number" class="form-control" name="jenis_obt">
                </div>
                <div class="mb-3">
                    <label class="form-label">tanggal bayar</label>
                    <input type="text" class="form-control" name="tgl_bayar">
                </div>
                <div class="mb-3">
                    <label class="form-label">jumlah</label>
                    <input type="number" class="form-control" name="jumlah">
                </div>
                <div class="mb-3">
                    <label class="form-label">status</label>
                    <input type="text" class="form-control" name="status">
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