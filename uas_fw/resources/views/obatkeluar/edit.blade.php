@extends('layouts.master')
@section('title','Edit Obat keluar')
@section('judul','Edit Obat keluar')
@section('heading','Edit Obat keluar')



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
            <form method="POST" action="/obatkeluar/{{$ok->id}}">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jenis Obat</label>
                    <select class="form-control" id="type" name="jenis_obt">
                        <option hidden value=""></option>
                        <option value="Tablet" {{ $ok-> jenis_obt == 'Tablet' ? 'selected' : '' }}>Tablet</option>
                        <option value="Kapsul" {{ $ok-> jenis_obt == 'Kapsul' ? 'selected' : '' }}>Kapsul</option>
                        <option value="Sirup" {{ $ok->  jenis_obt == 'Sirup' ? 'selected' : '' }}>Sirup</option>
                    </select>

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tanggal</label>
                    <input type="date" name="tanggal" value="{{$ok->tanggal}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">ED</label>
                    <input type="date" name="ed" value="{{$ok->ed}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nama Obat</label>
                    <select name="namaobat" class="form-control" id="">
                        <option hidden value="{{$ok->stokobats_id}}">{{$ok->stokobats->namaobat}}</option>
                        @foreach ($sto as $item)
                            <option value="{{$item->id}}">{{$item->namaobat}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Keterangan</label>
                    <input type="text" name="keterangan" value="{{$ok->keterangan}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Jumlah</label>
                    <input type="text" name="jumlah" value="{{$ok->jumlah}}" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Edit Data</button>
            </form>
        </div>
        <!-- /.card-body -->

    </div>
@endsection