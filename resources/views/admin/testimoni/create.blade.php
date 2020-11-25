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
      <h1 style="text-align: center;">Form Gambar Testimoni</h1>
      <form method="POST" id="upload_form" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <table class="table">
            <tr>
              <td>
                <label @error('gambar') class="text-danger" @enderror>Gambar @error('gambar')
                  {{$message}} @enderror</label>
              </td>
              <td>
                <input type="file" id="gambar" name="gambar[]" value="" multiple="true " class="form-control @error('gambar') is-invalid @enderror">
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

<script>
  $(document).ready(function() {
    //fetch_data();
    $('#upload_form').on('submit', function(event) {
      event.preventDefault();
      var form_data = new FormData();
      var totalfiles = document.getElementById('gambar').files.length;
      for (var index = 0; index < totalfiles; index++) {
        form_data.append("gambar[]", document.getElementById('gambar').files[index]);
      }
      form_data.append('_token', _token);
      $.ajax({
        url: "{{ route('testi') }}",
        method: "POST",
        data: form_data,
        dataType: 'JSON',
        contentType: false,
        cache: false,
        processData: false,
        success: function(data) {
          $('#message').css('display', 'block');
          $('#message').html(data.message);
          if (data.class_name == "alert-success") {
            $('#message').removeClass("alert-danger").addClass(data.class_name);
          } else {
            $('#message').removeClass("alert-success").addClass(data.class_name);
          }
          $('.custom-file-input').val('');
          fetch_data();
        }
      })
    });
    var _token = $('input[name="_token"]').val();
    console.log(_token);
  )
  });
</script>