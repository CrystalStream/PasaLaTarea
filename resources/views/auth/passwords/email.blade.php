@extends('partials.main')

<!-- Main Content -->
@section('content')
  <div class="container-fluid white-back">
    <div class="container has-margin-top">
        <div class="jumbotron col-xs-12 reveal">
          <div class="col-xs-12">
            <fieldset>
              <legend>Restablecer contrasena</legend>
            </fieldset>
            {!! Form::open(array('url' => '/password/email', 'method' => 'POST')) !!}
              <div class="col-xs-12">
                <p>Ingresa tu email y te enviaremos un correo para que puedas reestablecer tu contrasena</p>
              </div>
              <div class="col-xs-12 col-md-6 col-md-offset-3 has-margin-top">
                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }} second_reveal">
                  <label>Correo Electronico:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-user"></i>
                    </div>
                    {!! Form::email('email', null, array('class' => 'form-control')) !!}
                  </div>
                  @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                  @endif
                </div>
              </div>
              </div>
              <div class="col-xs-12 col-md-6 col-md-offset-3 has-margin-top">
                <div class="form-group second_reveal">
                 {!!Form::submit('Enviar Correo', array('class' => 'btn btn-success btn-block'))!!}
                </div>
              </div>
            {!! Form::close() !!}
          </div>
        </div> {{-- ./jumbotron --}}
    </div>
  </div>
@endsection
