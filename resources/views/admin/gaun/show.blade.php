@extends('layout/main')

@section('title','Web Bridal')

@section('container')
<style>
  img {
    width: 120px;
    height: 120px;
  }

  .btn {
    font-size: 10px;
  }

  @media (min-width: 578px) {

    img {
      width: 300px;
      height: 300px;
    }

    .btn {
      font-size: 12px;
    }
  }
</style>
<div class="contianer">
  <div class="row">
    <div class="col-sm-5 ml-auto mr-auto">
      <h1 style="text-align: center;">Gaun</h1>
      <a href="/gaun" class="badge badge-danger">Kembali</a>
      <table class="table">
        <tbody>

          <table class="table">
            <thead>
              <tr>
                <th scope="col">Nama</th>
                <th scope="col">Jenis</th>
                <th scope="col">Gambar</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{$gaun->nama}}</td>
                <td>{{$gaun->jenis}}</td>
                <td><img class="img-thumbnail" style="max-width:4000px" src="{{asset('storage')}}/images/imggaun/{{$gaun->gambar}}"></td>
                <td>
                  <a href=" {{url($gaun->id)}}/edit" class="btn btn-primary">Edit</a>
                  <form action="/admin/{{$gaun->id}}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                </td>
              </tr>
            </tbody>
          </table>
          <a href="/admin/ukuran/{{$gaun->id}}" class="badge badge-info">Tambah Data Ukuran</a>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Ukuran</th>
                <th scope="col">Deskripsi</th>
              </tr>
            </thead>

            <tbody>
              @foreach ($ukurangaun as $row)
              <tr>
                <td>{{$row->ukuran}}</td>
                <td style="word-break:break-all;">{{$row->deskripsi}}</td>
                <td>
                  <a href=" /admin/editukuran/{{$row->id}}" class="btn btn-primary">Edit</a>
                  <form action="/admin/ukurangaun/{{$row->id}}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                </td>
              </tr>
            </tbody>
            @endforeach
          </table>

    </div>
  </div>
</div>
@endsection