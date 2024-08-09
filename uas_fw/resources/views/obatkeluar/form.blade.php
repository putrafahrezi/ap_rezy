@extends('layouts.master')
@section('title','Tambah obat keluar')
@section('judul','Tambah Obat Keluar')
@section('bc')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/home/">Home</a></li>
        <li class="breadcrumb-item"><a href="/obatkeluar/">Data Obat Keluar</a></li>
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
            <form method="post" action="/obatkeluar/store/" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nama Obat</label>
                    <select name="namaobat" class="form-control" id="">
                                <option value="">-Pilih Obat-</option>
                                @foreach ($sto as $item)
                                    <option value="{{$item->id}}">{{$item->namaobat}}</option>
                                @endforeach
                            </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">tanggal</label>
                    <input type="date" class="form-control" name="tanggal">
                </div>
                <div class="mb-3">
                    <label class="form-label">jumlah</label>
                    <input type="text" class="form-control" name="jumlah">
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
                    <label class="form-label">ed</label>
                    <input type="date" class="form-control" name="ed">
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