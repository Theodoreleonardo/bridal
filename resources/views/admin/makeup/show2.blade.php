@extends('layout/main')

@section('title','Web Bridal')

@section('container')
<div class="contianer">
    <div class="row">
    <div class="col-10">
    <h1>Commercial Photoshoot</h1>
    <a href="/makeup/create/3" class="badge badge-info">Tambar Data Photoshhot</a>
    <table class="table">
  <tbody>
  <table class="table">
  <thead>
  <tr>
      <th scope="col">id</th>
      <th scope="col">Jenis</th>
      <th scope="col">style</th>
      <th scope="col">nama gambar</th>
      <th scope="col">gambar</th>
    </tr>
  </thead>
  @foreach ($makeup as $row)
  <tbody>
    <tr>
      <th scope="row">{{$row->id}}</th>
      <td>{{$row->jenis}}</td>
      <td>{{$row->style}}</td>
      <td>{{$row->gambar}}</td>
      <td><img class="img-thumbnail" style="max-width: 100px" src="{{asset('storage')}}/images/imgmakeup/{{$row->gambar}}">
      </td>
        <td>
      <a href=" {{url($row->id)}}/edit/makeup" class="btn btn-primary">edit</a>
      <form action="/admin/makeup/{{$row->id}}" method="post" class="d-inline">
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