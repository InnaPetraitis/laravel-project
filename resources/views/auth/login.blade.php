@extends('layouts.app')

@section('content')
<div class="container">
    <style>
        #app{
            margin: 0 auto;
            text-align: center;
        }
        .nav-item{
            list-style:none;
            text-decoration: none;
        }
        .nav-link{
            color: #ffffff;
            text-decoration: none;
            opacity: 1;
            font-size: 18px;
            transition: all 0.4s;
            padding: 5px 20px;
            background-color: #3490dc;
            margin-right: 20px;
        }
        .nav-link:hover{
            opacity:0.7;
            transition: all 0.4s
        }
        .navbar-nav{
            display: flex;
            justify-content: center;
            padding-left: 0px;
        }
        .form-group{
            margin-bottom: 20px;
        }
        label, input{
            font-size: 18px;
            line-height: 25px;
        }
        input{
            padding: 5px;
        }
        .btn{
            color: #ffffff;
            text-decoration: none;
            opacity: 1;
            font-size: 18px;
            transition: all 0.4s;
            padding: 5px 20px;
            background-color: #3490dc;
            border: none;
        }
        .btn:hover{
            opacity:0.7;
            transition: all 0.4s
        }
    </style>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h2 class="card-header">{{ __('Login') }}</h2>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection