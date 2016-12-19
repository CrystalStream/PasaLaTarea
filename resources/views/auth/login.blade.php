@extends('partials.main')

@section('content')
  <div class="container-fluid white-back">
    <div class="container has-margin-top">
        <div class="jumbotron col-xs-12 reveal">
          <div class="col-xs-12">
            <fieldset>
              <legend>Inicia Sesion</legend>
            </fieldset>
            <div class="col-xs-12 col-md-6 col-md-offset-3 text-center second_reveal">
                <fieldset>
                    <legend>Inicia sesion con tus redes sociales</legend>
                </fieldset>
                <div class="col-xs-12 has-padding-bot second_reveal">
                    <button class="btn btn-primary">
                        <i class="fa fa-facebook"></i>
                        &nbsp;
                        Facebook
                    </button>
                </div>
                <div class="has-border-bottom has-margin-bot"><span>O</span></div>
                <p class="has-margin-top"> Si tienes una cuenta con nosotros ingresa tu email y tu contrasena</p>
            </div>
            {!! Form::open(array('url' => '/login', 'method' => 'POST')) !!}
              <div class="col-xs-12 col-md-6 col-md-offset-3 has-margin-top">
                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }} second_reveal">
                  <label>Correo Electronico:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-user"></i>
                    </div>
                    {!! Form::email('email', null, array('class' => 'form-control')) !!}
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-md-6 col-md-offset-3">
                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }} second_reveal">
                  <label>Password:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-envelope"></i>
                    </div>
                    {!! Form::password('password', array('class' => 'form-control')) !!}
                  </div>
                    <a class="btn btn-link" href="{{ url('/password/reset') }}">
                       Olvidaste tu contrasena?
                    </a>
                </div>
              </div>
              <div class="col-xs-12 col-md-6 col-md-offset-3 has-margin-top">
                <div class="form-group second_reveal">
                 {!!Form::submit('Iniciar sesion', array('class' => 'btn btn-success btn-block'))!!}
                </div>
              </div>
            {!! Form::close() !!}
          </div>
        </div> {{-- ./jumbotron --}}
    </div>
  </div>
@endsection
