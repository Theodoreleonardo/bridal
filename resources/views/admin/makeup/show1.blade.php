@extends('layout/main')

@section('title','Web Bridal')

@section('container')
<style>
  img {
    width: 100px;
    height: 200px;
  }

  .btn {
    font-size: 8px !important;
  }


  h1 {
    font-size: 24px;
  }

  @media (min-width: 578px) {
    h1 {
      font-size: 40px;
    }

    .btn {
      font-size: 14px !important;
    }
  }

  @media (min-width: 992px) {}
</style>
<div class="contianer">
  <div class="row">
    <div class="col-sm-8 ml-auto mr-auto">
      <h1 style="text-align: center;">Party</h1>
      <a href="/makeup/create/2" class="btn tambah btn-info">Tambah Data Party</a>
      <a href="/makeup" class="btn kembali btn-danger">Kembali</a>
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
                <th scope="col">gambar</th>
              </tr>
            </thead>
            @foreach ($makeup as $row)
            <tbody>
              <tr>
                <td>{{$row->jenis}}</td>
                <td>{{$row->style}}</td>
                <td><img class="img-thumbnail" style="max-width:4000px" src="{{asset('storage')}}/images/imgmakeup/{{$row->gambar}}">
                </td>
                <td>
                  <a href=" {{url($row->id)}}/edit/makeup" class="btn btn-primary">Edit</a>
                  <form action="/admin/makeup/{{$row->id}}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                </td>
              </tr>
            </tbody>
            @endforeach
    </div>
  </div>
</div>
@endsection