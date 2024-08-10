@extends('layouts.master')
@section('title','Edit stok obat')
@section('judul','Edit stok obat')
@section('heading','Edit stok obat')
@section('bc')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/stokobat/">Data stok obat</a></li>
    </ol>
@endsection


@section('content')
    <div class="card">
        <div class="card-header">
        <h3 class="card-title">

        </h3>

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
            <form method="POST" action="/stokobat/{{$so->id}}">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">nama obat</label>
                    <input type="text" name="namaobat" value="{{$so->namaobat}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jenis Obat</label>
                    <select class="form-control" id="type" name="jenis_obt">
                        <option hidden value=""></option>
                        <option value="Tablet" {{ $so-> jenis_obt == 'Tablet' ? 'selected' : '' }}>Tablet</option>
                        <option value="Kapsul" {{ $so-> jenis_obt == 'Kapsul' ? 'selected' : '' }}>Kapsul</option>
                        <option value="Sirup" {{ $so->  jenis_obt == 'Sirup' ? 'selected' : '' }}>Sirup</option>
                    </select>

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tanggal</label>
                    <input type="date" name="tanggal" value="{{$so->tanggal}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">stok</label>
                    <input type="text" name="stok" value="{{$so->stok}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">nama petugas</label>
                    <select name="petugas" class="form-control" id="">
                       <option hidden value="{{$so->petugas_id}}">{{$so->petugas->namaobat}}</option>
                        @foreach ($ptg as $item2)
                            <option value="{{$item2->id}}">{{$item2->namapetugas}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Keterangan</label>
                    <input type="text" name="keterangan" value="{{$so->keterangan}}" class="form-control">
                </div>
               

                <button type="submit" class="btn btn-primary">Edit Data</button>
            </form>
        </div>
        <!-- /.card-body -->

    </div>
@endsection