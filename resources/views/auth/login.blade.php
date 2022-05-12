@extends('layouts.app')

@section('content')
<!-- Loader -->
<div id="global-loader">
    <img src="{{asset('assets/img/estiba.png')}}" class="loader-img" alt="Loader">
</div>
<!-- /Loader -->

<div class="square-box">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
</div>
<div class="page" >
    <div class="page-single">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-8 col-xs-10 card-sigin-main mx-auto my-auto py-4 justify-content-center">
                    <div class="card-sigin">
                            <!-- Demo content-->
                            <div class="main-card-signin d-md-flex">
                                <div class="wd-100p"><div class="d-flex mb-4"><a href="{{url('/')}}"><img src="{{asset('assets/img/estiba.png')}}" class="sign-favicon ht-40" alt="logo"></a></div>
                                    <div class="">
                                    <div class="main-signup-header">
                                        <h2>{{ __('Login') }}</h2>
                                        <h6 class="font-weight-semibold mb-4">Por favor ingresa para continuar.</h6>
                                        <div class="panel panel-primary">
                                            <div class="panel-body tabs-menu-body border-0 p-3">
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tab5">
                                                        <form method="POST" action="{{ route('login') }}">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label>Email</label> 
                                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> 
                                                                @error('email')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Password</label>
                                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                                                @error('password')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
