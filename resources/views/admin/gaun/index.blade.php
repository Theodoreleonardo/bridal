@extends('layout/main')

@section('title','Web Bridal')

@section('container')
<div class="contianer">
    <div class="row">
    <div class="col-10">
    <h1>Ini Gaun</h1>
    <a href="/gaun/create" class="badge badge-info">Tambah data</a>
    <table class="table">
  <tbody>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nama</th>
      <th scope="col">jenis</th>
      <th scope="col">gambar</th>
      <th scope="col">Tombol</th>
    </tr>
  </thead>
  <tbody>
  @foreach($gaun as $row)
    <tr>
      <th scope="row">{{$row->id}}</th>
      <td>{{$row->nama}}</td>
      <td>{{$row->jenis}}</td>
      <td>{{$row->gambar}}</td>
      <td>
      <a href="{{$row->id}}/edit" class="btn btn-primary">edit</a>
      <form action="/admin/{{$row->id}}" method="post" class="d-inline">
    @method('delete')
    @csrf
    <button type="submit" class="btn btn-danger">delete</button>
    </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

  </tbody>
</table>
    </div>
    </div>
</div>
@endsection