@extends('layout/main')

@section('title','Web Bridal')

@section('container')
<div class="contianer">
    <div class="row">
    <div class="col-10">
    <h1>Form Edit Contact</h1>
    <form method="POST" action="/admin/contact/{{$contact->id}}" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Text</label>
    <input type="Text" value="{{$contact->text}}" class="form-control @error('text') is-invalid @enderror" id="text" placeholder="masukan text" name="text">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
    </div>
</div>
@endsection