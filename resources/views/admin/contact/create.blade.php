@extends('layout/main')

@section('title','Web Bridal')

@section('container')
<div class="contianer">
    <div class="row">
    <div class="col-10">
    <h1>Form Tambah Contact</h1>
    <form method="POST" action="/admin/contact" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Masukan Text</label>
    <input type="Text" value="{{old('nama')}}" class="form-control @error('nama') is-invalid @enderror" id="text" placeholder="masukan text" name="text">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

    </div>
    </div>
</div>
@endsection