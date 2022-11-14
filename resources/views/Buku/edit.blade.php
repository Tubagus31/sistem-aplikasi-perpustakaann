@extends('adminlte::page')
@section('title', 'Edit User')
@section('content_header')
    <h1 class="m-0 text-dark">Edit Buku</h1>
@stop
@section('content')
    <form action="{{route('buku.update', $user)}}" method="post">
        @method('PUT')
        @csrf
        <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputName">Judul Buku</label>
                        <input type="text" class="form-control @error('Judul_Buku') is-invalid @enderror" id="exampleInputTitle" placeholder="Judul Buku" name="Kode_Buku" value="{{old('Kode_Buku')}}">
                        @error('Judul_Buku') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Kode Buku</label>
                        <input type="text" class="form-control @error('Kode_Buku') is-invalid @enderror" id="exampleInputCode" placeholder="Kode Buku" name="Kode_Buku" value="{{old('Kode_Buku')}}">
                        @error('Kode_Buku') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword">Penulis</label>
                        <input type="password" class="form-control @error('Penulis') is-invalid @enderror" id="exampleInputWriter" placeholder="Penulis" name="Penulis">
                        @error('Penulis') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword">Penerbit</label>
                        <input type="text" class="form-control" id="exampleInputPassword" placeholder="Penerbit" name="Penerbit">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{route('users.index')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop