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
      <h1>Form Edit Baner</h1>
      <form method="POST" action="/admin/baners/{{$baner->id}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <table class="table">
            <tr>
              <td>
                <label for="exampleInputEmail1">Kategori</label>
              </td>
              <td>
                <select value="{{old('kategori')}}" class="form-control @error('kategori') is-invalid @enderror" id="kategori" placeholder="masukan kategori" name="kategori">
                  <option value="Gaun">Gaun</option>
                  <option value="Makeup">Makeup</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>
                <label @error('gambar') class="text-danger" @enderror>Gambar @error('gambar')
                  {{$message}} @enderror</label>
              </td>
              <td>
                <input type="file" value="" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar" onchange="preview()">
              </td>
            </tr>
            <tr>
              <td>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/baners" class="btn btn-danger">Kembali</a>
              </td>
              <td>
                <div class="col-sm-12 gambar">
                  <img src="storage/slider/gbr2.png" class="img-tumbnail img-preview">
                </div>
              </td>
            </tr>
          </table>
        </div>

      </form>
    </div>
  </div>
</div>
@endsection