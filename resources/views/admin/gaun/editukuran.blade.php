@extends('layout/main')

@section('title','Web Bridal')

@section('container')
<style>
  input {
    word-break: break-all !important;
  }
</style>
<div class="contianer">
  <div class="row">
    <div class="col-sm-5 ml-auto mr-auto">
      <h1 style="text-align: center;">Edit ukuran</h1>
      <form method="POST" action="/ukurangaun/{{$data->id}}">
        @method('patch')
        @csrf
        <div class="form-group">
          <input type="hidden" value="{{$data->id_gauns}}" class="form-control @error('nama') is-invalid @enderror" id="id_gauns" name="id_gauns">
          <table class="table">
            <tr>
              <td>
                <label @error('ukuran') class="text-danger" @enderror>Ukuran @error('ukuran')
                  {{$message}} @enderror</label>
              </td>
              <td>
                <input type="Text" value="{{$data->ukuran}}" class="form-control @error('nama') is-invalid @enderror" id="ukuran" placeholder="masukan ukuran" name="ukuran">
              </td>
            </tr>
            <tr>
              <td>
                <label @error('deskripsi') class="text-danger" @enderror>Deskripsi @error('deskripsi')
                  {{$message}} @enderror</label>
              </td>
              <td>
                <input type="Text" value="{{$data->deskripsi}}" class="form-control @error('nama') is-invalid @enderror" id="deskripsi" placeholder="masukan deskripsi" name="deskripsi"></input>
              </td>
            </tr>
            <tr>
              <td>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </td>
            </tr>
          </table>
        </div>

      </form>
    </div>
  </div>
</div>
@endsection