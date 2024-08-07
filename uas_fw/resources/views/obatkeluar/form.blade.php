@extends('layouts.master')
@section('title','Tambah obat')
@section('judul','Tambah obat')
@section('bc')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Data obat</a></li>
        <li class="breadcrumb-item active">Tambah obat</li>
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
            <form method="post" action="/dataobat/store/" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Kode Obat</label>
                    <input type="text" class="form-control" name="kdobat">
                </div>
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
                    <label class="form-label">tgl_bayar</label>
                    <input type="number" class="form-control" name="tgl_bayar">
                </div>
                <div class="mb-3">
                    <label class="form-label">jumlah</label>
                    <input type="number" class="form-control" name="jumlah">
                </div>
                <div class="mb-3">
                    <label class="form-label">status</label>
                    <input type="number" class="form-control" name="status">
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