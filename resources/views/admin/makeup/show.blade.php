@extends('layout/main')

@section('title','Web Bridal')

@section('container')
<div class="contianer">
    <div class="row">
    <div class="col-10">
    <h1>Wedding</h1>
    <a href="/makeup/create/{{1}}" class="badge badge-info">Tambar Data Wedding</a>
    <a href="/makeup" class="badge badge-danger">Kembali</a>
    @if (session('Status'))
        <div class="alert alert-success">
          {{session('Status')}}
        </div>
        @endif
    <table class="table">
  <tbody>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Jenis</th>
      <th scope="col">style</th>
      <th scope="col">nama gambar</th>
      <th scope="col">gambar</th>
    </tr>
  </thead>
  @foreach ($makeup as $row)
  <tbody>
    <tr>
      <td>{{$row->jenis}}</td>
      <td>{{$row->style}}</td>
      <td>{{$row->gambar}}</td>
      <td><img class="img-thumbnail" style="max:width=4000px" src="{{asset('storage')}}/images/imgmakeup/{{$row->gambar}}">
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