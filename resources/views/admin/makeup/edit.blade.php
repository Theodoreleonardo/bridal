@extends('layout/main')

@section('title','Web Bridal')

@section('container')
<div class="contianer">
    <div class="row">
    <div class="col-10">
    <h1>Form Edit Make Up</h1>
    <form method="POST" action="/admin/makeup/{{$makeup->id}}" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Jenis</label>
    <select value="{{$makeup->jenis}}" class="form-control @error('jenis') is-invalid @enderror" id="jenis" placeholder="masukan jenis" name="jenis">
    <option value="Wedding">Wedding</option>
    <option value="Party">Party</option>
    <option value="Commercial Photoshoot">Commercial Photoshoot</option>
  </select>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Style</label>
    <input type="Text" value="{{$makeup->style}}" class="form-control @error('style') is-invalid @enderror" id="style" placeholder="masukan style" name="style">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

    </div>
    </div>
</div>
@endsection