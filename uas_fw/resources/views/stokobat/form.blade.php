@extends('layouts.master')
@section('title','Tambah stok')
@section('judul','Tambah stok')
@section('bc')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Data stok</a></li>
        <li class="breadcrumb-item active">Tambah stok</li>
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
            <form method="post" action="/stokobat/store/" enctype="multipart/form-data">
                @csrf
                
                <div class="mb-3">
                    <label class="form-label">Nama Obat</label>
                    <input type="text" class="form-control" name="namaobat">
                </div>
                <div class="mb-3">
                    <label class="form-label">Jenis Obat</label>
                    <select name="jenis_obt" class="form-control" id="">
                        <option value="">-Pilih-</option>
                        <option value="Tablet">Tablet</option>
                        <option value="Kapsul">Kapsul</option>
                        <option value="Sirup">Sirup</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">stok</label>
                    <input type="text" class="form-control" name="stok">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama petugas</label>
                    <input type="text" class="form-control" name="namapetugas">
                </div>
                <div class="mb-3">
                    <label class="form-label">keterangan</label>
                    <input type="text" class="form-control" name="keterangan">
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