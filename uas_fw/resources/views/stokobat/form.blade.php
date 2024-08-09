@extends('layouts.master')
@section('title','Tambah stok obat')
@section('judul','Tambah Stok Obat')
@section('bc')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/home/">Home</a></li>
        <li class="breadcrumb-item"><a href="/stokobat/">Data Stok</a></li>
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
                        <option hidden value="">-Pilih-</option>
                        <option value="Tablet">Tablet</option>
                        <option value="Kapsul">Kapsul</option>
                        <option value="Sirup">Sirup</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Stok</label>
                    <input type="text" class="form-control" name="stok">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Petugas</label>
                    <select name="petugas" class="form-control" id="">
                                <option hidden value="">-Pilih Petugas-</option>
                                @foreach ($ptg as $item)
                                    <option value="{{$item->id}}">{{$item->namapetugas}}</option>
                                @endforeach
                            </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Keterangan</label>
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