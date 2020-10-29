@extends('layout/main')

@section('title','Web Bridal')

@section('container')
<div class="contianer">
    <div class="row">
    <div class="col-10">
    <h1>Gaun</h1>
    <a href="/gaun/create" class="badge badge-info">Tambar Data Gaun</a>
    <table class="table">
    @if (session('Status'))
    <div class="alert alert-success">
      {{session('Status')}}
    </div>
    @endif 
  <tbody>
  @foreach($gaun as $row)
  <ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
    {{$row->nama}}
    <a href="/gaun/{{ $row->id }}" class="badge badge-info">Detail</a>
  </li>
</ul>
   @endforeach
  </tbody>
</table>
    </div>
    </div>
</div>
@endsection