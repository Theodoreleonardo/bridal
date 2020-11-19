@extends('layout/main')

@section('title','Web Bridal')
<?php

if ($makeup->jenis == 'Wedding'){
  $asd = '1';
}
else if ($makeup->jenis == 'Party'){
  $asd = '2';
}
else if ($makeup->jenis == 'Commercial Photoshoot'){
  $asd = '3';
}
  
?>
@section('container')
<div class="contianer">
    <div class="row">
    <div class="col-10">
    <h1>Form Edit {{$makeup->jenis}}</h1>
    <form method="POST" action="/admin/makeup/{{$makeup->id}}" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
  <input type="hidden" value="{{$makeup->jenis}}"id="jenis"name="jenis">
    <label for="exampleInputEmail1">Style</label>
    <select value="{{$makeup->style}}" class="form-control @error('style') is-invalid @enderror" id="style" placeholder="masukan style" name="style">
    @foreach ($data as $data)
    <option value="{{$data}}">{{$data}}</option>
    @endforeach
  </select>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">gambar</label>
    <input type="file" value="" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="/admin/makeup/{{$asd}}" class="btn btn-danger">Kembali</a>
  </form>



    </div>
    </div>
</div>
@endsection