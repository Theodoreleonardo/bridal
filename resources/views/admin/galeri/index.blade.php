@extends('layout/main')

@section('title','Web Bridal')

@section('container')
<div class="contianer">
    <div class="row">
    <div class="col-10">
    <h1>Galeri</h1>
    <table class="table">
  <tbody>
  <a href="/admin/galeri" class="badge badge-info">Tambar Gambar Galeri</a>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Nama Gambar</th>
      <th scope="col">Gambar</th>
    </tr>
  </thead>
  @foreach ($galeri as $row)
  <tbody>
    <tr>
      <td>{{$row->gambar}}</td>
      <td><img class="img-thumbnail" style="max:width=4000px" src="{{asset('storage')}}/images/imggaleri/{{$row->gambar}}"></td>
        <td>
      <form action="/admin/galeri/{{$row->id}}" method="post" class="d-inline">
    @method('delete')
    @csrf
    <button type="submit" class="btn btn-danger">delete</button>
    </form>
      </td>
    </tr>
  </tbody>
  @endforeach
    </div>
    </div>
</div>
@endsection