@extends('layout/main')

@section('title','Web Bridal')

@section('container')
<div class="contianer">
    <div class="row">
    <div class="col-10">
    <h1>{{$id}}</h1>
    <form method="POST" action="/admin/ukuran">
    @csrf
  <div class="form-group">
    <input type="hidden" value="{{$id}}" class="form-control @error('nama') is-invalid @enderror" id="id_gauns" name="id_gauns">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">ukuran</label>
    <input type="Text" value="{{old('ukuran')}}" class="form-control @error('nama') is-invalid @enderror" id="ukuran" placeholder="masukan ukuran" name="ukuran">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">deskripsi</label>
    <input type="Text" value="{{old('deskripsi')}}" class="form-control @error('nama') is-invalid @enderror" id="deskripsi" placeholder="masukan deskripsi" name="deskripsi">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
    </div>
</div>
@endsection