@extends('layout/main')

@section('title','Web Bridal')

@section('container')
<div class="contianer">
    <div class="row">
    <div class="col-10">
    <h1>Form Edit Baner</h1>
    <form method="POST" action="/admin/baners/{{$baner->id}}" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Kategori</label>
    <select value="{{old('kategori')}}" class="form-control @error('kategori') is-invalid @enderror" id="kategori" placeholder="masukan kategori" name="kategori">
    <option value="Gaun">Gaun</option>
    <option value="Makeup">Makeup</option>
  </select>
  </div>
  <div class="form-group">
  <input type="hidden" value="{{$baner->gambar}}"id="gambar"name="gambar">
    <label for="exampleInputEmail1">gambar</label>
    <input type="file" value="" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
    </div>
</div>
@endsection