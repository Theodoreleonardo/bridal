@extends('layout/main')

@section('title','Web Bridal')

@section('container')
<style>
  #jenis {
    width: 70%;
  }

  option {
    font-size: 12px;
    width: 70% !important;
  }
</style>
<div class="contianer">
  <div class="row">
    <div class="col-sm-5 ml-auto mr-auto">
      <h1 style="text-align: center;">Form Edit Gaun</h1>
      <form method="POST" action="/gaun/{{$gaun->id}}" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <div class="form-group">
          <input type="hidden" value="{{$gaun->id}}" class="form-control" id="id" name="id">
          <table class="table">
            <tr>
              <td>
                <label @error('nama') class="text-danger" @enderror>Nama @error('nama')
                  {{$message}} @enderror</label>
              </td>
              <td>
                <input type="Text" value="{{$gaun->nama}}" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="masukan nama" name="nama">
              </td>
            </tr>
            <tr>
              <td>
                <label for="exampleInputEmail1">Jenis</label>
              </td>
              <td>
                <select value="{{$gaun->jenis}}" class="form-control @error('nama') is-invalid @enderror" id="jenis" placeholder="masukan jenis" name="jenis">
                  <option value="mermaid">Mermaid</option>
                  <option value="a-line">A line</option>
                  <option value="ball">Ball gown</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>
                <label @error('gambar') class="text-danger" @enderror>gambar @error('gambar')
                  {{$message}} @enderror</label>
              </td>
              <td>
                <input type="file" value="" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar">
              </td>
            </tr>
            <tr>
              <td>
                <button type="Simpan" class="btn btn-primary">Submit</button>
                <a href="{{$url}}" class="btn btn-danger">Kembali</a>
              </td>
            </tr>
          </table>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection