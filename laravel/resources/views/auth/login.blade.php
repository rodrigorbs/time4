@extends('layouts.app')

@section('titulo')
    Login
@stop

@section('conteudo')
    <br>
    <div class="container ">
        <div class="row">
            <div class="col s3"></div>
            <div class="col s6">
                <div class="card-content black-text">
                    <span class="card-title centered"><h5>Login</h5></span>
                </div>
            </div>
            <div class="col s3"></div>
        </div>

        <div class ="row">
            <div class="col s3"></div>
            <div class="col s12 m6 l6 z-depth-6 card-panel hoverable"><br>
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">mail_outline</i>
                                <label for="email" data-error="wrong" data-success="right">Email</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="input-field col s12" >
                                <i class="material-icons prefix">lock_outline</i>
                                <label for="password">Password</label>
                                <input id="password" type="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12 m12 l12  login-text">
                            <input type="checkbox" id="remember-me" />
                            <label for="remember-me">Remember me</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <button type="submit" class="btn waves-effect waves-light col s12">
                                Login
                            </button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s6 m6 l6">
                            <p class="margin medium-small">
                                <a class="black-text" href="{{ route('register') }}">
                                    Register New
                                </a>
                            </p>
                        </div>

                        <div class="input-field col s6 m6 l6">
                            <p class="margin right-align medium-small">
                                <a class="black-text" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col s3"></div>
        </div>
    </div>

@endsection
