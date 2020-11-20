@extends('layout/main')

@section('title','Web Bridal')

@section('container')
<div class="contianer">
    <div class="row">
    <div class="col-10">
    <h1>Form Tambah Galeri</h1>
    <div class="alert" id="message" style="display: none"></div>
    <form method="POST" action="/admin/galeri" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label @error('gambar') class="text-danger" @enderror>Gambar @error('gambar')
    {{$message}} @enderror</label>
    <input type="file" value="" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

    </div>
    </div>
</div>
@endsection