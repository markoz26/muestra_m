@extends('layouts.app')

@section('body-class','signup-page')

@section('content')
<div class="header header-filter" style="background-image: url('{{ asset('img/lab_quimico.jpg') }}'); background-size: cover; background-position: top center;">
<div class="container">
<div class="row">
<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
    <div class="card card-signup">
        <form class="form" method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                <!--token-->
                @csrf

            <div class="header header-primary text-center">
                <h4>Registro de nuevo Usuario</h4>
<!--                 <div class="social-line">
                    <a href="#pablo" class="btn btn-simple btn-just-icon">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                    <a href="#pablo" class="btn btn-simple btn-just-icon">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#pablo" class="btn btn-simple btn-just-icon">
                        <i class="fa fa-google-plus"></i>
                    </a>
                </div> -->
            </div>
            <p class="text-divider">Completa tus datos</p>
            <div class="content">

<!-- NOMBRE -->
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">face</i>
                    </span>
                    <input type="text" class="form-control" placeholder="Nombre" name="name" value="{{ old('name') }}" required autofocus>
                </div>
<!-- EMAIL -->
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">email</i>
                    </span>
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Correo electrónico" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                </div>
<!-- CONTRASEÑA -->
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">lock_outline</i>
                    </span>
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Contraseña" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                </div>
<!-- CONFIRMAR CONTRASEÑA -->
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">lock_outline</i>
                    </span>
                        <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password_confirmation" placeholder="Confirmar contraseña" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                </div>
            </div>

            <div class="footer text-center">
                <button type="submit" href="#pablo" class="btn btn-simple btn-primary btn-lg">CONFIRMAR REGISTRO
            </div>

                <!--<a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>-->
        </form>
    </div>
</div>
</div>
</div>

<footer class="footer">
    <div class="container">
    <nav class="pull-left">
        <ul>
            <li>
                <a href="http://www.creative-tim.com">
                    Creative Tim
                </a>
            </li>
            <li>
                <a href="http://presentation.creative-tim.com">
                   About Us
                </a>
            </li>
            <li>
                <a href="http://blog.creative-tim.com">
                   Blog
                </a>
            </li>
            <li>
                <a href="http://www.creative-tim.com/license">
                    Licenses
                </a>
            </li>
        </ul>
    </nav>
    <div class="copyright pull-right">
        &copy; 2016, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com" target="_blank">Creative Tim</a>
    </div>
    </div>
</footer>
</div>
@endsection