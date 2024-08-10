@extends('layouts.master')
@section('title','Edit suplier')
@section('judul','Edit suplier')
@section('heading','Edit suplier')
@section('bc')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/suplier/">Data suplier</a></li>
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
            <form method="POST" action="/suplier/{{$sp->id}}">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">kode Suplier</label>
                    <input type="text" name="kdsuplier" value="{{$sp->kdsuplier}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nama Suplier</label>
                    <input type="text" name="namasuplier" value="{{$sp->namasuplier}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Handphone</label>
                    <input type="text" name="hp" value="{{$sp->hp}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Alamat</label>
                    <input type="text" name="alamat" value="{{$sp->alamat}}" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Edit Data</button>
            </form>
        </div>
        <!-- /.card-body -->

    </div>
@endsection