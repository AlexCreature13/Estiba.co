<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
		<meta name="Author" content="Spruko Technologies Private Limited">
		<meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>

		<!-- Title -->
		<title> Estiba.co </title>

		<!-- Favicon -->
		<link rel="icon" href="{{asset('assets/img/estiba.png')}}" type="image/x-icon"/>

		<!-- Icons css -->
		<link href="{{asset('assets/back/css/icons.css')}}" rel="stylesheet">

		<!--  bootstrap css-->
		<link href="{{asset('assets/back/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />

		<!-- style css -->
		<link href="{{ asset('assets/back/css/style.css')}}" rel="stylesheet">
		<link href="{{ asset('assets/back/css/style-dark.css')}}" rel="stylesheet">
		<link href="{{ asset('assets/back/css/style-transparent.css')}}" rel="stylesheet">

		<!---Skinmodes css-->
		<link href="{{ asset('assets/back/css/skin-modes.css')}}" rel="stylesheet" />

		<!--- Animations css-->
		<link href="{{ asset('assets/back/css/animate.css')}}" rel="stylesheet">

	</head>
    <body>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ ('Estiba.co') }}
                    </a>
                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>

            <main class="py-4">
                @yield('content')
            </main>
        </div>

		<!-- JQuery min js -->
		<script src="{{asset('assets/back/plugins/jquery/jquery.min.js')}}"></script>

		<!-- Bootstrap js -->
		<script src="{{asset('assets/back/plugins/bootstrap/js/popper.min.js')}}"></script>
		<script src="{{asset('assets/back/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

		<!-- Moment js -->
		<script src="{{asset('assets/back/plugins/moment/moment.js')}}"></script>

		<!-- eva-icons js -->
		<script src="{{asset('assets/back/js/eva-icons.min.js')}}"></script>

		<!-- generate-otp js -->
		<script src="{{asset('assets/back/js/generate-otp.js')}}"></script>

		<!--Internal  Perfect-scrollbar js -->
		<script src="{{asset('assets/back/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>

		<!-- Theme Color js -->
		<script src="{{asset('assets/back/js/themecolor.js')}}"></script>

		<!-- custom js -->
		<script src="{{asset('assets/back/js/custom.js')}}"></script>

	</body>
</html>
