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
    </style>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
