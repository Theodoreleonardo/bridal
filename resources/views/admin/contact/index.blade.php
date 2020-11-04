@extends('layout/main')

@section('title','Web Bridal')

@section('container')
<div class="contianer">
    <div class="row">
    <div class="col-10">
    <h1>Contact</h1>
    <table class="table">
  <tbody>
  <a href="/admin/contact" class="badge badge-info">Tambar Gambar Baner</a>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">contact</th>
    </tr>
  </thead>
  @foreach ($contact as $row)
  <tbody>
    <tr>
      <th scope="row">{{$row->id}}</th>
      <td>{{$row->text}}</td>
        <td>
        <a href=" {{url($row->id)}}/contact" class="btn btn-primary">edit</a>
      <form action="/admin/contact/{{$row->id}}" method="post" class="d-inline">
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