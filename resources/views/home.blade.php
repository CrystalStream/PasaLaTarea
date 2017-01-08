@extends('partials.main')

@section('content')
<nav class="navbar navbar-inverse sidebar" role="navigation">
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <p class="navbar-brand">Menu</p>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mis Materias<i class="pull-right hidden-xs fa fa-graduation-cap"></i></a>
          <ul class="dropdown-menu forAnimate" role="menu">
            <li><a href="#"><i class="fa fa-caret-right"></i>&nbsp;Ciencias</a></li>
            <li class="divider"></li>
            <li class="dropdown"><a class="dropdown-toggle" href="#"><i class="fa fa-caret-right"></i>&nbsp;Matematicas</a>
              <ul class="dropdown-menu forAnimate">
                <li><a href="#">Primer semestre</a></li>
                <li><a href="#">Segundo semestre</a></li>
                <li><a href="#">Tercero semestre</a></li>
              </ul>
            </li></li>
            <li class="divider"></li>
            <li class="dropdown"><a class="dropdown-toggle" href="#"><i class="fa fa-caret-right"></i>&nbsp;Fisica</a>
              <ul class="dropdown-menu forAnimate">
                <li><a href="#">Primer semestre</a></li>
                <li><a href="#">Segundo semestre</a></li>
                <li><a href="#">Tercero semestre</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li>
          <a href="#">Mis tareas<i class="pull-right hidden-xs fa fa-book"></i></a>
        </li>
        <li ><a href="#">Mi perfil <i class="fa fa-user pull-right hidden-xs"></i></a></li>
        <li ><a href="#">Contactanos <i class="fa fa-weixin pull-right hidden-xs"></i></a></li>
        <li ><a href="#">FAQ <i class="fa fa-question pull-right hidden-xs"></i></a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="main">
  <div class="container">
    <div class="row">@yield('main-content')</div>
  </div>
</div>
@endsection
