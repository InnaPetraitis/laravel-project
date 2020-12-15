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
        .nav-item.dropdown{
            display: flex;
        }
        .dropdown-item{
            color: #ffffff;
            text-decoration: none;
            opacity: 1;
            font-size: 18px;
            transition: all 0.4s;
            padding: 5px 20px;
            background-color: #3490dc;
            margin-right: 20px;
        }
        .dropdown-item:hover{
            opacity:0.7;
            transition: all 0.4s
        }
        #navbarDropdown{
            margin-top: -6px;
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
                <h1 class="card-header">{{ __('Dashboard') }}</h1v>

                <div class="card-body">
                    @if (session('status'))
                        <h2 class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </h2>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <form action="{{ route('image.upload') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="file" name="image">
                    <button class="btn" type="submit">Submit</button>
                </form>
                @isset($path)
                    <img src="{{ asset('/storage/'.$path) }}">
                @endisset
            </div>
        </div>
    </div>
</div>
@endsection
