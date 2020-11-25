@extends('layout/main')

@section('title','Web Bridal')

@section('container')
<style>
  html {
    text-align: center;
  }

  img {
    width: 200px;
    height: 200px;
  }

  .btn {
    font-size: 12px !important;
  }

  h1 {
    font-size: 24px;
  }

  #style {
    width: 70%;
  }

  option {
    font-size: 12px;
    width: 70% !important;
  }

  @media (min-width: 578px) {
    h1 {
      font-size: 40px;
    }

    .btn {
      font-size: 14px !important;
    }
  }
</style>
<div class="container">
  <div class="row">
    <div class="col-5-sm ml-auto mr-auto">
      <h1 style="text-align: center;">Banner</h1>
      <a href="/admin/baners" class="badge badge-info">Tambar Gambar Baner</a>
      <table class="table">
        <tr>
          <th scope="col">Gambar</th>
          <th scope="col">Kategori</th>
        </tr>
        @foreach ($baner as $row)
        <tbody>
          <tr>
            <td><img class="img-thumbnail" src="{{asset('storage')}}/images/imgbaner/{{$row->gambar}}">
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
      </table>
    </div>
  </div>
</div>
@endsection