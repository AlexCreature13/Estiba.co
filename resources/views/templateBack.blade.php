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
 
	</head>

	<body class="ltr main-body app sidebar-mini">

		<!-- Loader -->
		<div id="global-loader">
			<img src="{{asset('assets/img/estiba.png')}}" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->

		<!-- Page -->
		<div class="page">

			<div>
				<!-- main-header -->
				<div class="main-header side-header sticky nav nav-item">
					<div class=" main-container container-fluid">
						<div class="main-header-left ">
							<div class="responsive-logo">
								<a href="{{url('/productos')}}" class="header-logo">
									<img src="{{asset('assets/img/estiba.png')}}" class="mobile-logo logo-1" alt="logo">
									<img src="{{asset('assets/img/estiba.png')}}" class="mobile-logo dark-logo-1" alt="logo">
								</a>
							</div>
							<div class="app-sidebar__toggle" data-bs-toggle="sidebar">
								<a class="open-toggle" href="javascript:void(0);"><i class="header-icon fe fe-align-left" ></i></a>
								<a class="close-toggle" href="javascript:void(0);"><i class="header-icon fe fe-x"></i></a>
							</div>
							<div class="logo-horizontal">
								<a href="{{url('/productos')}}" class="header-logo">
									<img src="{{asset('assets/img/estiba.png')}}" class="mobile-logo logo-1" alt="logo">
									<img src="{{asset('assets/img/estiba.png')}}" class="mobile-logo dark-logo-1" alt="logo">
								</a>
							</div>
							<div class="main-header-center ms-4 d-sm-none d-md-none d-lg-block form-group">
								<input class="form-control" placeholder="Search..." type="search">
								<button class="btn"><i class="fas fa-search"></i></button>
							</div>
						</div>
						<div class="col-md-3 text-end">
							<button type="button" class="btn btn-outline-primary me-2">
								@guest
									@if (Route::has('login'))
										<li class="nav-item">
											<a class="me-2" href="{{ route('login') }}">{{ __('Login') }}</a>
										</li>
									@endif

									@if (Route::has('register'))
										<li class="nav-item">
											<a class="me-2" href="{{ route('register') }}">{{ __('Register') }}</a>
										</li>
									@endif
								@else
									<li class="nav-item dropdown">
										<a id="navbarDropdown" class="me-2 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
											{{ Auth::user()->name }}
										</a>

										<div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
											<a class="dropdown-item" href="{{ route('login') }}"
											onclick="event.preventDefault();
															document.getElementById('logout-form').submit();">
												{{ __('Logout') }}
											</a>

											<form id="logout-form" action="{{ route('login') }}" method="POST" class="d-none">
												@csrf
											</form>
										</div>
									</li>
								@endguest
							</button>
						</div>
					</div>
				</div>
				<!-- /main-header -->

				<!-- main-sidebar -->
				<div class="sticky">
					<aside class="app-sidebar">
						<div class="main-sidebar-header active">
							<a class="header-logo active" href="{{url('/productos')}}">
								<img src="{{asset('assets/img/estiba.png')}}" class="main-logo  desktop-logo" alt="logo">
								<img src="{{asset('assets/img/estiba.png')}}" class="main-logo  desktop-dark" alt="logo">
								<img src="{{asset('assets/img/estiba.png')}}" class="main-logo  mobile-logo" alt="logo">
								<img src="{{asset('assets/img/estiba.png')}}" class="main-logo  mobile-dark" alt="logo">
							</a>
						</div>
						<div class="main-sidemenu">
							<div class="slide-left disabled" id="slide-left"></div>
							<ul class="side-menu">
								<li class="side-item side-item-category">Menu</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="{{url('/')}}"><svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M3 13h1v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7h1a1 1 0 0 0 .707-1.707l-9-9a.999.999 0 0 0-1.414 0l-9 9A1 1 0 0 0 3 13zm7 7v-5h4v5h-4zm2-15.586 6 6V15l.001 5H16v-5c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v5H6v-9.586l6-6z"/></svg><span class="side-menu__label">Vitrina</span></a>
								</li>
								<li class="side-item side-item-category"> Configuracion </li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M10 3H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM9 9H5V5h4v4zm11-6h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zm-1 6h-4V5h4v4zm-9 4H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1zm-1 6H5v-4h4v4zm8-6c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4-1.794-4-4-4zm0 6c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2z"/></svg><span class="side-menu__label">Categorias</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0);">Categorias</a></li>
										<li><a class="slide-item" href="{{url('/categorias')}}">todas</a></li>
										<li><a class="slide-item" href="{{url('/categorias/1')}}">Madera</a></li>
										<li><a class="slide-item" href="{{url('/categorias/2')}}">Cuero</a></li>
										<li><a class="slide-item" href="{{url('/categorias/3')}}">Acrilico</a></li>
									</ul>
								</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="{{url('/productos/')}}"><svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M20 17V7c0-2.168-3.663-4-8-4S4 4.832 4 7v10c0 2.168 3.663 4 8 4s8-1.832 8-4zM12 5c3.691 0 5.931 1.507 6 1.994C17.931 7.493 15.691 9 12 9S6.069 7.493 6 7.006C6.069 6.507 8.309 5 12 5zM6 9.607C7.479 10.454 9.637 11 12 11s4.521-.546 6-1.393v2.387c-.069.499-2.309 2.006-6 2.006s-5.931-1.507-6-2V9.607zM6 17v-2.393C7.479 15.454 9.637 16 12 16s4.521-.546 6-1.393v2.387c-.069.499-2.309 2.006-6 2.006s-5.931-1.507-6-2z"/></svg><span class="side-menu__label"> Productos </span></a>
								</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="{{url('/users/')}}"><svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M20 17V7c0-2.168-3.663-4-8-4S4 4.832 4 7v10c0 2.168 3.663 4 8 4s8-1.832 8-4zM12 5c3.691 0 5.931 1.507 6 1.994C17.931 7.493 15.691 9 12 9S6.069 7.493 6 7.006C6.069 6.507 8.309 5 12 5zM6 9.607C7.479 10.454 9.637 11 12 11s4.521-.546 6-1.393v2.387c-.069.499-2.309 2.006-6 2.006s-5.931-1.507-6-2V9.607zM6 17v-2.393C7.479 15.454 9.637 16 12 16s4.521-.546 6-1.393v2.387c-.069.499-2.309 2.006-6 2.006s-5.931-1.507-6-2z"/></svg><span class="side-menu__label"> Usuarios </span></a>
								</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="{{url('/user_types/')}}"><svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M20 17V7c0-2.168-3.663-4-8-4S4 4.832 4 7v10c0 2.168 3.663 4 8 4s8-1.832 8-4zM12 5c3.691 0 5.931 1.507 6 1.994C17.931 7.493 15.691 9 12 9S6.069 7.493 6 7.006C6.069 6.507 8.309 5 12 5zM6 9.607C7.479 10.454 9.637 11 12 11s4.521-.546 6-1.393v2.387c-.069.499-2.309 2.006-6 2.006s-5.931-1.507-6-2V9.607zM6 17v-2.393C7.479 15.454 9.637 16 12 16s4.521-.546 6-1.393v2.387c-.069.499-2.309 2.006-6 2.006s-5.931-1.507-6-2z"/></svg><span class="side-menu__label"> tipos de Usuarios </span></a>
								</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="{{url('/id_types/')}}"><svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M20 17V7c0-2.168-3.663-4-8-4S4 4.832 4 7v10c0 2.168 3.663 4 8 4s8-1.832 8-4zM12 5c3.691 0 5.931 1.507 6 1.994C17.931 7.493 15.691 9 12 9S6.069 7.493 6 7.006C6.069 6.507 8.309 5 12 5zM6 9.607C7.479 10.454 9.637 11 12 11s4.521-.546 6-1.393v2.387c-.069.499-2.309 2.006-6 2.006s-5.931-1.507-6-2V9.607zM6 17v-2.393C7.479 15.454 9.637 16 12 16s4.521-.546 6-1.393v2.387c-.069.499-2.309 2.006-6 2.006s-5.931-1.507-6-2z"/></svg><span class="side-menu__label"> tipos de documento </span></a>
								</li>
							</ul>
							<div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"/></svg></div>
						</div>
					</aside>
				</div>
				<!-- main-sidebar -->
			</div>

			<!-- main-content -->

			@yield('Contenido')
  
			@if($errors->any())
				<ul>
					@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			@endif

			<!-- /main-content -->

			<!-- Sidebar-right-->
			


			<!--/Sidebar-right-->

				<!-- Country-selector modal-->
				<!-- Country-selector modal-->
				<!-- Message Modal -->
				<!-- modal -->
				<!-- Audio Modal -->
				<!-- modal -->
				<!-- Footer opened -->
				<div class="main-footer">
				<div class="col-md-12 col-sm-12 text-center">
					<div class="container-fluid pt-0 ht-100p">
						Copyright © 2022 <a href="javascript:void(0);" class="text-primary">nowa</a>. Designed with <span class="fa fa-heart text-danger"></span> by <a href="javascript:void(0);"> Spruko </a> All rights reserved
					</div>
				</div>
				</div>
				<!-- Footer closed -->
		</div>
		<!-- End Page -->

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

		<!-- Back-to-top -->
		<a href="#top" id="back-to-top"><i class="las la-arrow-up"></i></a>

		<!-- JQuery min js -->
		<script src="{{asset ('assets/back/plugins/jquery/jquery.min.js') }}"></script>

		<!-- Bootstrap js -->
		<script src="{{asset ('assets/back/plugins/bootstrap/js/popper.min.js')}}"></script>
		<script src="{{asset ('assets/nack/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

		<!-- Internal Chart.Bundle js-->
		<script src="{{asset ('assets/back/plugins/chart.js/Chart.bundle.min.js')}}"></script>

		<!-- Moment js -->
		<script src="{{asset ('assets/back/plugins/moment/moment.js')}}"></script>

		<!-- INTERNAL Apexchart js -->
		<script src="{{asset ('assets/back/js/apexcharts.js')}}"></script>

		<!--Internal Sparkline js -->
		<script src="{{asset ('assets/back/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

		<!-- Moment js -->
		<script src="{{asset ('assets/back/plugins/raphael/raphael.min.js')}}"></script>

		<!-- P-scroll js -->
		<script src="../assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="../assets/plugins/perfect-scrollbar/p-scroll.js"></script>

		<!-- Internal Flot js -->
		<script src="{{asset ('assets/back/plugins/jquery.flot/jquery.flot.js')}}"></script>
		<script src="{{asset ('assets/back/plugins/jquery.flot/jquery.flot.pie.js')}}"></script>
		<script src="{{asset ('assets/back/plugins/jquery.flot/jquery.flot.resize.js')}}"></script>

		<!-- Rating js-->
		<script src="{{asset ('assets/back/plugins/rating/jquery.rating-stars.js')}}"></script>
		<script src="{{asset ('assets/back/plugins/rating/jquery.barrating.js')}}"></script>

		<!--Internal  Perfect-scrollbar js -->
		<script src="{{asset ('assets/back/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
		<script src="{{asset ('assets/back/plugins/perfect-scrollbar/p-scroll.js')}}"></script>

		<!-- Eva-icons js -->
		<script src="{{asset ('assets/back/js/eva-icons.min.js')}}"></script>

		<!-- right-sidebar js -->
		<script src="{{asset ('assets/back/plugins/sidebar/sidebar.js')}}"></script>
		<script src="{{asset ('assets/back/plugins/sidebar/sidebar-custom.js')}}"></script>

		<!-- Sidebar js -->
		<script src="{{asset ('assets/back/plugins/side-menu/sidemenu.js')}}"></script>

		<!-- Sticky js -->
		<script src="{{asset ('assets/back/js/sticky.js')}}"></script>

		<!--Internal  index js -->
		<script src="{{asset ('assets/back/js/index2.js')}}"></script>

		<!-- Internal Data tables -->
		<script src="{{asset ('assets/back/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset ('assets/back/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
		<script src="{{asset ('assets/back/plugins/datatable/dataTables.responsive.min.js')}}"></script>
		<script src="{{asset ('assets/back/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>

		<!-- INTERNAL Select2 js -->
		<script src="{{asset ('assets/back/plugins/select2/js/select2.full.min.js')}}"></script>
		<script src="{{asset ('assets/back/js/select2.js')}}"></script>

		<!-- Theme Color js -->
		<script src="{{asset ('assets/back/js/themecolor.js')}}"></script>

		<!-- custom js -->
		<script src="{{asset ('assets/back/js/custom.js')}}"></script>

	</body>
</html>