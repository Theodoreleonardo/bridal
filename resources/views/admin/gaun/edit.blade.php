@extends('layout/main')

@section('title','Web Bridal')

@section('container')
<div class="contianer">
    <div class="row">
    <div class="col-10">
    <h1>Form Edit Gaun</h1>
    <form method="POST" action="/gaun/{{$gaun->id}}">
    @method('patch')
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="hidden" value="{{$gaun->id}}" class="form-control" id="id" name="id">
    <input type="Text" value="{{$gaun->nama}}" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="masukan nama" name="nama">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">jenis</label>
    <input type="Text" value="{{$gaun->jenis}}" class="form-control @error('nama') is-invalid @enderror" id="jenis" placeholder="masukan jenis" name="jenis">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">gambar</label>
    <input type="Text" value="{{$gaun->gambar}}" class="form-control @error('gambar') is-invalid @enderror" id="gambar" placeholder="masukan gambar" name="gambar">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
    </div>
</div>
@endsection