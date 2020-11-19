@extends('layout/main')

@section('title','Web Bridal')

@section('container')
<div class="contianer">
    <div class="row">
    <div class="col-10">
    <h1>Form Tambah Gaun</h1>
    <form method="POST" action="/admin/gaun" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="Text" value="{{old('nama')}}" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="masukan nama" name="nama">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">jenis</label>
    <input type="Text" value="{{old('jenis')}}" class="form-control @error('nama') is-invalid @enderror" id="jenis" placeholder="masukan jenis" name="jenis">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">gambar</label>
    <input type="file" value="" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="/gaun" class="btn btn-danger">Kembali</a>
</form>

    </div>
    </div>
</div>
@endsection