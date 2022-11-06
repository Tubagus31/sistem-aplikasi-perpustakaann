@extends('adminlte::page')
@section('title', 'Tambah Member')
@section('content_header')
    <h1 class="m-0 text-dark">Tambah Member</h1>
@stop
@section('content')
    <form action="{{route('member.store')}}" method="post">
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputName">Nama</label>
                        <input type="text" class="form-control @error('Nama') is-invalid @enderror" id="exampleInputName" placeholder="Nama lengkap" name="Nama" value="{{old('Nama')}}">
                        @error('Nama') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">NIK</label>
                        <input type="text" class="form-control @error('NIK') is-invalid @enderror" id="exampleInputNIK" placeholder="NIK" name="NIK"">
                        @error('NIK') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{route('member.index')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop