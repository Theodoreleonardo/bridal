@extends('layout/main')

@section('title','Web Bridal')

@section('container')
<div class="contianer">
  <div class="row">
    <div class="col-sm-5 ml-auto mr-auto">
      <h1 style="text-align: center;">Tambah Ukuran Gaun</h1>
      <form method="POST" action="/admin/ukuran">
        @csrf
        <div class="form-group">
          <input type="hidden" value="{{$id}}" class="form-control @error('nama') is-invalid @enderror" id="id_gauns" name="id_gauns">
          <br>
          <table class="table">
            <tr>
              <td width="40%">
                <label @error('ukuran') class="text-danger" @enderror>Ukuran @error('ukuran')
                  {{$message}} @enderror</label>
              </td>
              <td>
                <input type="Text" value="{{old('ukuran')}}" class="form-control @error('nama') is-invalid @enderror" id="ukuran" placeholder="masukan ukuran" name="ukuran">
              </td>
            </tr>
            <tr>
              <td>
                <label @error('ukuran') class="text-danger" @enderror>Deskripsi @error('deskripsi')
                  {{$message}} @enderror</label>
              </td>
              <td>
                <textarea type="Text" value="{{old('deskripsi')}}" class="form-control @error('nama') is-invalid @enderror" id="deskripsi" placeholder="masukan deskripsi" name="deskripsi"></textarea>
              </td>
            </tr>
            <tr>
              <td>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <!-- <a href="/gaun" class="badge badge-danger">Kembali</a> -->
              </td>
            </tr>
          </table>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection