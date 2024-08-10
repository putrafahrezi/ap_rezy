@extends('layouts.master')
@section('title','Edit petugas')
@section('judul','Edit petugas')
@section('heading','Edit petugas')
@section('bc')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/petugas/">Data petugas</a></li>
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
            <form method="POST" action="/petugas/{{$ptg->id}}">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">kode Petugas</label>
                    <input type="text" name="kdpetugas" value="{{$ptg->kdpetugas}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nama Petugas</label>
                    <input type="text" name="namapetugas" value="{{$ptg->namapetugas}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Handphone</label>
                    <input type="text" name="hp" value="{{$ptg->hp}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Email</label>
                    <input type="text" name="email" value="{{$ptg->email}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Umur</label>
                    <input type="text" name="umur" value="{{$ptg->umur}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Alamat</label>
                    <input type="text" name="alamat" value="{{$ptg->alamat}}" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Edit Data</button>
            </form>
        </div>
        <!-- /.card-body -->

    </div>
@endsection