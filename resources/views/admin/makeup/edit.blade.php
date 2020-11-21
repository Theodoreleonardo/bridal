@extends('layout/main')

@section('title','Web Bridal')
<?php

if ($makeup->jenis == 'Wedding') {
  $asd = '1';
} else if ($makeup->jenis == 'Party') {
  $asd = '2';
} else if ($makeup->jenis == 'Commercial Photoshoot') {
  $asd = '3';
}

?>
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
<div class="contianer">
  <div class="row">
    <div class="col-sm-5 ml-auto mr-auto">
      <h1 style="text-align: center;">Edit {{$makeup->jenis}}</h1>
      <form method="POST" action="/admin/makeup/{{$makeup->id}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <input type="hidden" value="{{$makeup->jenis}}" id="jenis" name="jenis">
          <br>
          <table class="table">
            <tr>
              <td width="40%" align="left"><label>Select Style</label></td>
              <td width="60%"><select value="{{$makeup->style}}" class="form-control @error('style') is-invalid @enderror" id="style" placeholder="masukan style" name="style">
                  @foreach ($data as $data)
                  <option value="{{$data}}">{{$data}}</option>
                  @endforeach
                </select>
              </td>
            </tr>
            <tr>
              <td width="40%" align="left"><label>Select File for Upload</label></td>
              <td width="30"><input type="file" value="" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar" onchange="preview()"></td>
            </tr>
            <tr>
              <label @error('gambar') class="text-danger" @enderror for="exampleInputEmail1">@error('gambar')
                {{$message}} @enderror </label>
            </tr>
            <tr>
              <td>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/admin/makeup/{{$asd}}" class="btn btn-danger">Kembali</a>
              </td>
              <td>
                <div class="col-sm-12 gambar">
                  <img src="storage/slider/gbr2.png" class="img-tumbnail img-preview" width="200px">
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