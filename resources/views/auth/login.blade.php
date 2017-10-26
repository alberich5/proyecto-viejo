@extends('layouts.app')
@section('content')
<form class="form" method="POST" action="{{ route('login') }}">
  {{ csrf_field() }}
  <div class="header header-omar text-center">
    <h4>Iniciar session</h4>
  </div>
  <p class="text-divider">SIPAB 2017</p>
  <div class="col-md-offset-3 input-group col-md-8">
  @if ($errors->has('username'))
              <span class="help-block">
                  <strong>{{ $errors->first('username') }}</strong>
              </span>
  @endif

  @if ($errors->has('password'))
              <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
              </span>
  @endif
</div>



  <div class="content">

    <div class="input-group">
      <span class="input-group-addon">
        <i class="material-icons">face</i>
      </span>
      <input id="username" type="username" name="username" value="{{ old('username') }}" required autofocus class="form-control" placeholder=" Nombre de Usuario">
    </div>


    <div class="input-group">
      <span class="input-group-addon">
        <i class="material-icons">lock_outline</i>
      </span>
      <input id="password" type="password" name="password" value="{{ old('password') }}" required autofocus placeholder="Contraseña" class="form-control" />
    </div>

  </div>
  <div class="footer text-center">
    <button type="submit" class="btn btn-primary btn-round">
        <i class="material-icons">lock open</i>Iniciar sesion
    </button>
  </div>

</form>

@endsection
