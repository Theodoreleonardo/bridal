@extends('layout/main')

@section('title','Web Bridal')

@section('container')
<div class="contianer">
    <div class="row">
    <div class="col-10">
    <h1>Baner</h1>
    <table class="table">
  <tbody>
  <a href="/admin/baners" class="badge badge-info">Tambar Gambar Baner</a>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nama Gambar</th>
      <th scope="col">Gambar</th>
      <th scope="col">Kategori</th>
      <th scope="col">Aksi</th>
    </tr>
    </tr>
  </thead>
  @foreach ($baner as $row)
  <tbody>
    <tr>
      <th scope="row">{{$row->id}}</th>
      <td>{{$row->gambar}}</td>
      <td><img class="img-thumbnail" style="max-width: 100px" src="{{asset('storage')}}/images/imgbaner/{{$row->gambar}}">
      </td>
      <td>{{$row->kategori}}
      </td>
        <td>
        <a href=" /admin/baners/{{$row->id}}" class="btn btn-primary">edit</a>
      <form action="/admin/baners/{{$row->id}}" method="post" class="d-inline">
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