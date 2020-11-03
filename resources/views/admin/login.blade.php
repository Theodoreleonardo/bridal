@extends('layout.auth-master')

@section('content')

<div class="card card-primary">
  <div class="card-header"><h4>Login Admin</h4></div>

  <div class="card-body">
    <form method="POST" action="/admin/login">
        @csrf
      <div class="form-group">
      @if (session('message'))
    <div class="alert alert-danger">
      {{session('message')}}
    </div>
    @endif 
        <label for="email">Name</label>
        <input aria-describedby="emailHelpBlock" id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" placeholder="Masukan Nama " tabindex="1" value="{{ old('name') }}" autofocus>
        <div class="invalid-feedback">
          {{ $errors->first('email') }}
        </div>
        @if(App::environment('demo'))
        <small id="emailHelpBlock" class="form-text text-muted">
            Demo Email: admin@example.com
        </small>
        @endif
      </div>
      <div class="form-group">
        <div class="d-block">
            <label for="password" class="control-label">Password</label>
          <!-- <div class="float-right">
            <a href="/admin/gaun" class="text-small">
              Forgot Password?
            </a>
          </div> -->
        </div>
        <input aria-describedby="passwordHelpBlock" id="password" type="password" placeholder="masukan password" class="form-control{{ $errors->has('password') ? ' is-invalid': '' }}" name="password" tabindex="2">
        <div class="invalid-feedback">
          {{ $errors->first('password') }}
        </div>
        @if(App::environment('demo'))
        <small id="passwordHelpBlock" class="form-text text-muted">
            Demo Password: 1234
        </small>
        @endif
      </div>

      <!-- <div class="form-group">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember"{{ old('remember') ? ' checked': '' }}>
          <label class="custom-control-label" for="remember">Remember Me</label>
        </div>
      </div> -->

      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
          Login
        </button>
      </div>
    </form>
  </div>
</div>
<div class="mt-5 text-muted text-center">
  Don't have an account? <a href="/admin/register">Create One</a>
</div>
@endsection
