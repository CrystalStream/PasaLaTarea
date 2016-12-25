@extends('partials.main')

@section('content')

<div class="container-fluid white-back">
<div class="container has-margin-top">
    <div class="jumbotron col-xs-12 reveal">
      <div class="col-xs-12">
        <fieldset>
          <legend>Reestablecer Contraseña</legend>
          <p>Ingresa tu correo electronico y tu nueva contraseña para iniciar sesion.</p>
        </fieldset>
        {!! Form::open(array('url' => '/password/reset', 'method' => 'POST')) !!}
          <div class="col-xs-12 col-md-6 col-md-offset-3 has-margin-top">
            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }} second_reveal">
              <label>Correo Electronico:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-envelope"></i>
                </div>
                {!! Form::email('email', null, array('class' => 'form-control')) !!}
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-md-6 col-md-offset-3">
            <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }} second_reveal">
              <label>Contraseña:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-lock"></i>
                </div>
                {!! Form::password('password', array('class' => 'form-control','id' => 'password-user','placeholder' => 'Tu contrasena', 'data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'Si tiene mas de 8 caracteres y minimo 1 numero, estariamos mas que contentos')) !!}
              </div>
              <small class="red hidden" id="no-lenght"> *La contrasena es muy corta, por favor elige otra <br></small>
              <small class="red hidden" id="no-number"> *La contrasena no contiene al menos un numero, porfavor elige otra <br></small>
              <small class="red error-no-match hidden"> *Las contrasenas no coinciden porfavor intenta de nuevo <br></small>
            </div>
          </div>
          <div class="col-xs-12 col-md-6 col-md-offset-3">
            <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }} second_reveal">
              <label>Repite la contrasena:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-lock"></i>
                </div>
                {!! Form::password('password', array('class' => 'form-control','id' => 'twice-pass-user', 'placeholder' => 'Otra vez tu contrasena')) !!}
              </div>
              <small class="red error-no-match hidden"> *Las contrasenas no coinciden porfavor intenta de nuevo</small>
            </div>
          </div>
          <div class="col-xs-12 col-md-6 col-md-offset-3 has-margin-top">
            <div class="form-group second_reveal">
             {!!Form::submit('Resetear contraseña', array('class' => 'btn btn-success btn-block','id' => 'submit-btn', 'disabled' => 'disabled'))!!}
            </div>
          </div>
        {!! Form::close() !!}
      </div>
    </div> {{-- ./jumbotron --}}
</div>
</div>







{{-- 
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset password</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Reset Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
