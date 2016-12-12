@extends('partials.main')

@section('content')
  <div class="container-fluid white-back">
    <div class="container has-margin-top">
        <div class="jumbotron col-xs-12 ">
          <div class="col-xs-12 col-md-6">
            <fieldset>
              <legend>Crea una cuenta con nosotros, es muy facil!</legend>
            </fieldset>
            {!! Form::open(array('url' => '/register', 'method' => 'POST')) !!}
              <div class="col-xs-12">
                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                  <label>Tu nickname:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-user"></i>
                    </div>
                    {!! Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'Tu nombre', 'data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'Este es tu nombre de usuario en la plataforma, tiene que ser unico e irrepetible')) !!}
                  </div>
                </div>
              </div>
              <div class="col-xs-12">
                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                  <label>Tu correo:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-envelope"></i>
                    </div>
                    {!! Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'Tu correo', 'data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'Este es el contacto mas directo que tendremos contigo')) !!}
                  </div>
                </div>
              </div>
              <div class="col-xs-12">
                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                  <label>Tu contrasena:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-lock"></i>
                    </div>
                    {!! Form::password('password', array('class' => 'form-control', 'placeholder' => 'Tu contrasena', 'data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => 'Si tiene mas de 8 caracteres y minimo 1 numero, estariamos mas que contentos')) !!}
                  </div>
                </div>
              </div>
              <div class="col-xs-12">
                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                  <label>Repite la contrasena:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-lock"></i>
                    </div>
                    {!! Form::password('password', array('class' => 'form-control', 'placeholder' => 'Otra vez tu contrasena')) !!}
                  </div>
                </div>
              </div>
              <div class="col-xs-12 has-margin-top">
                <div class="form-group">
                 {!!Form::submit('Registrarme', array('class' => 'btn btn-primary'))!!}
                </div>
              </div>
            {!! Form::close() !!}
          </div>
          <div class="hidden-xs hidden-sm col-md-6 has-margin-top">
              <div class="col-xs-12">
                <img src="{{ asset('/img/banner.jpg') }}" alt="" class="img-responsive">
                <p class="has-margin-top">Recuerda que puedes registrarte y subir tus tareas y si tienen buena calificacion puedes ganar muchas cosas.</p>
                <small>*Para mas informacion consulta la informacion que viene dentro de de nuestro FAQ.</small>
              </div>
          </div>
        </div> {{-- ./jumbotron --}}
    </div>
  </div>



{{-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

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

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
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
