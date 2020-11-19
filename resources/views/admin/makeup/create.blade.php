@extends('layout/main')

@section('title','Web Bridal')

@section('container')
<div class="contianer">
    <div class="row">
    <div class="col-10">
    <h1>Form Tambah Data {{$jenis}}</h1>
    <form method="POST" action="/admin/makeup" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
  <input type="hidden" value="{{$jenis}}"id="jenis"name="jenis">
    <label for="exampleInputEmail1">Style</label>
    <select value="{{old('style')}}" class="form-control @error('style') is-invalid @enderror" id="style" placeholder="masukan style" name="style">
    @foreach($makeup as $data)
    <option value="{{$data}}">{{$data}}</option>
    @endforeach
  </select>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">gambar</label>
    <input type="file" value="" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="/makeup" class="btn btn-danger">Kembali</a>
</form>

    </div>
    </div>
</div>
@endsection