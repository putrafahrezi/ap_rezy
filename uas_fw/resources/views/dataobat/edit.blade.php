@extends('layouts.master')
@section('title','Edit Obat Masuk')
@section('judul','Edit Obat Masuk')
@section('heading','Edit Obat Masuk')



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
            <form method="POST" action="/dataobat/{{$do->id}}">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nama Obat</label>
                    <select name="splr" class="form-control" id="">
                        <option hidden value="{{$do->stokobats_id}}">{{$do->stokobats->namaobat}}</option>
                        @foreach ($sto as $item)
                            <option value="{{$item->id}}">{{$item->namaobat}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tanggal</label>
                    <input type="date" name="tanggal" value="{{$do->tanggal}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Jumlah</label>
                    <input type="text" name="jumlah" value="{{$do->jumlah}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jenis Obat</label>
                    <select class="form-control" id="type" name="jenis_obt">
                        <option hidden value=""></option>
                        <option value="Tablet" {{ $do-> jenis_obt == 'Tablet' ? 'selected' : '' }}>Tablet</option>
                        <option value="Kapsul" {{ $do-> jenis_obt == 'Kapsul' ? 'selected' : '' }}>Kapsul</option>
                        <option value="Sirup" {{ $do->  jenis_obt == 'Sirup' ? 'selected' : '' }}>Sirup</option>
                    </select>

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Suplier</label>
                    <select name="splr" class="form-control" id="">
                       <option hidden value="{{$do->supliers_id}}">{{$do->supliers->namasuplier}}</option>
                        @foreach ($sp as $item2)
                            <option value="{{$item2->id}}">{{$item2->namasuplier}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">ED</label>
                    <input type="date" name="ed" value="{{$do->ed}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Keterangan</label>
                    <input type="text" name="keterangan" value="{{$do->keterangan}}" class="form-control">
                </div>
               

                <button type="submit" class="btn btn-primary">Edit Data</button>
            </form>
        </div>
        <!-- /.card-body -->

    </div>
@endsection