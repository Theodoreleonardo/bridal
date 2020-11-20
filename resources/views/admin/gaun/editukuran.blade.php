@extends('layout/main')

@section('title','Web Bridal')

@section('container')
<div class="contianer">
    <div class="row">
    <div class="col-10">
    <h1>Edit ukuran</h1>
    <form method="POST" action="/ukurangaun/{{$data->id}}">
    @method('patch')
    @csrf
  <div class="form-group">
    <input type="hidden" value="{{$data->id_gauns}}" class="form-control @error('nama') is-invalid @enderror" id="id_gauns" name="id_gauns">
  </div>
  <div class="form-group">
    <label @error('ukuran') class="text-danger" @enderror>Ukuran @error('ukuran')
    {{$message}} @enderror</label>
    <input type="Text" value="{{$data->ukuran}}" class="form-control @error('nama') is-invalid @enderror" id="ukuran" placeholder="masukan ukuran" name="ukuran">
  </div>
  <div class="form-group">
    <label @error('deskripsi') class="text-danger" @enderror>Deskripsi @error('deskripsi')
    {{$message}} @enderror</label>
    <input type="Text" value="{{$data->deskripsi}}" class="form-control @error('nama') is-invalid @enderror" id="deskripsi" placeholder="masukan deskripsi" name="deskripsi"></input>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
    </div>
</div>
@endsection