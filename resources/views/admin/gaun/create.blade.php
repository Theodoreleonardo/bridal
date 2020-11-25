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

  #jenis {
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
<div class="contianer">
  <div class="row">
    <div class="col-sm-5 ml-auto mr-auto">
      <h1 style="text-align: center;">Form Tambah Gaun</h1>
      <form method="POST" action="/admin/gaun" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <br>
          <table class="table">
            <tr>
              <td width="40%"><label @error('nama') class="text-danger" @enderror>Nama @error('nama')
                  {{$message}} @enderror</label>
              </td>
              <td>
                <input type="Text" value="{{old('nama')}}" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="masukan nama" name="nama">
              </td>
            </tr>
            <tr>
              <td width="40%">
                <label for="exampleInputEmail1">Jenis</label>
              </td>
              <td>
                <select value="{{old('jenis')}}" class="form-control @error('nama') is-invalid @enderror" id="jenis" placeholder="masukan jenis" name="jenis">
                  <option value="mermaid">Mermaid</option>
                  <option value="a-line">A line</option>
                  <option value="ball">Ball gown</option>
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
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="/gaun" class="btn btn-danger">Kembali</a>
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