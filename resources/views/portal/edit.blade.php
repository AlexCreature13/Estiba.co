@extends('templateFront')
@section('Contenido')

	<div class="pt-desktop-header">
		<div class="container-fluid menuwithout-bg-drop-small">
			<div class="headinfo-box form-inline">
				<div class="navinfo cont-center">
					<!-- logo -->
					<div class="pt-logo pt-logo-alignment" itemscope itemtype="http://schema.org/Organization">
						<a href="{{url('/')}}" itemprop="url">
							<h2 class="pt-title">Estiba.co</h2>
						</a>
					</div>
					<!-- /logo -->
				</div>
				<div class="options">
					<!-- pt-search -->
					<div class="pt-desctop-parent-search pt-parent-box">
						<div class="pt-search pt-dropdown-obj js-dropdown">
							<button class="pt-dropdown-toggle" data-tooltip="Search" data-tposition="bottom">
								<svg width="24" height="24" viewBox="0 0 24 24">
									<use xlink:href="#icon-search"></use>
								</svg>
							</button>
							<div class="pt-dropdown-menu">
								<div class="container">
									<form>
										<div class="pt-col">
											<form action="{{url('/')}}" method="get">
												@csrf
												<div class="input-group mb-2">
													<input type="text" class="form-control pt-search-input" name="search" id="search" placeholder="¿Que estas buscando? ...">
													<button class="pt-btn-search" type="submit">
														<svg width="24" height="24" viewBox="0 0 24 24">
															<use xlink:href="#icon-search"></use>
														</svg>
													</button>
												</div>
											</form>
										</div>
										<div class="pt-col">
											<button class="pt-btn-close">
												<svg width="16" height="16" viewBox="0 0 16 16">
													<use xlink:href="#icon-close"></use>
												</svg>
											</button>
										</div>
										<div class="search-results"></div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!-- /pt-search -->
					<!-- pt-account -->
					<div class="pt-desctop-parent-account pt-parent-box">
						<div class="pt-account pt-dropdown-obj js-dropdown">
							<button class="pt-dropdown-toggle"  data-tooltip="My Account" data-tposition="bottom">
								<svg width="24" height="24" viewBox="0 0 24 24">
									<use xlink:href="#icon-user"></use>
								</svg>
							</button>
							<div class="pt-dropdown-menu">
								<div class="pt-mobile-add">
									<button class="pt-close">
										<svg>
											<use xlink:href="#icon-close"></use>
										</svg>Close
									</button>
								</div>
								<div class="pt-dropdown-inner">
									<ul>
										@guest
											@if (Route::has('login'))
												<li class="nav-item">
													<a class="me-2" href="{{ route('login') }}">{{ __('Login') }}</a>
												</li>
											@endif
										@else
											{{ Auth::user()->name }}
											<li class="nav-item dropdown">
												<a id="navbarDropdown" class="me-12 dropdown-toggle" href="{{url('productos/')}} role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
													{{'Administrar'}}
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
										<!-- <li><a href="{{ route('login') }}">
											<i class="pt-icon pt-align-icon">
												<svg width="24" height="24">
													<use xlink:href="#icon-user"></use>
												</svg>
											</i>
											<span class="pt-text">Register</span>
										</a></li> -->
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /pt-account -->
					<!-- pt-compare -->
					<!-- /pt-compare -->
					<!-- pt-wishlist -->
					<!-- <div class="pt-desctop-parent-wishlist pt-parent-box">
						<div class="pt-wishlist pt-dropdown-obj">
							<a href="page-wishlist.html" class="pt-dropdown-toggle" data-tooltip="Wishlist" data-tposition="bottom">
								<span class="pt-icon">
									<svg width="24" height="24" viewBox="0 0 24 24">
										<use xlink:href="#icon-wishlist"></use>
									</svg>
								</span>
								<span class="pt-text">Wishlist</span>
								<span class="pt-badge">13</span>
							</a>
						</div>
					</div> -->
					<!-- /pt-wishlist -->
					<!-- pt-cart -->
					<div class="pt-desctop-parent-cart pt-parent-box">
						<div class="pt-cart pt-dropdown-obj js-dropdown" data-ajax="ajax-content/ajax_dropdown-cart.html">
							<button class="pt-dropdown-toggle" data-tooltip="Cart" data-tposition="bottom">
								<svg width="24" height="24" viewBox="0 0 24 24">
									<use xlink:href="#icon-cart_1"></use>
								</svg>
								<span class="pt-badge">2</span>
							</button>
							<div class="pt-dropdown-menu"></div>
						</div>
					</div>
					<!-- /pt-cart -->
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="headnav-box menu-without-bg cont-center">
				<!-- pt-menu -->
				<div class="pt-desctop-parent-menu">
					
						
					<div class="pt-desctop-menu">
							<nav>
								<ul>
									<li class="dropdown selected megamenu">
										<a href="{{url('/')}}"><span>HOME</span></a>
									</li>
									<li class="dropdown megamenu">
										<a href="{{url('/categorias/1')}}"><span>MADERA</span></a>
									</li>
									<li class="dropdown pt-megamenu-col-01">
										<a href="{{url('/categorias/2')}}"><span>CUERO</span></a>
									</li>
									<li class="dropdown pt-megamenu-col-01">
										<a href="{{url('/categorias/3')}}"><span>ACRILICO</span></a>
									</li>
									<li class="dropdown pt-megamenu-col-01">
										<a href="{{url('/productos/')}}"><span>administrar</span></a>
									</li>
								</ul>
							</nav>
						</div>
				</div>
				<!-- /pt-menu -->
			</div>
		</div>
	</div>
	<!-- stuck nav -->
	<div class="pt-stuck-nav">
		<div class="container-fluid">
			<div class="pt-header-row ">
				<div class="pt-stuck-parent-menu"></div>
				<div class="pt-logo-container">
					<!-- mobile logo -->
					<div class="pt-logo pt-logo-alignment" itemscope>
						<a href="{{url('/')}}" itemprop="url">
							<h2 class="pt-title">Estiba.co</h2>
						</a>
					</div>
					<!-- /mobile logo -->
				</div>
				<div class="pt-stuck-parent-search pt-parent-box"></div>
				<div class="pt-stuck-parent-account pt-parent-box"></div>
				<div class="pt-stuck-parent-compare pt-parent-box"></div>
				<div class="pt-stuck-parent-wishlist pt-parent-box"></div>
				<div class="pt-stuck-parent-cart pt-parent-box"></div>
			</div>
		</div>
	</div>
</header>
<main id="pt-pageContent">
	<div class="container-indent nomargin">
		<div class="mainSlider-layout">
			<div class="mainSliderSlick mainSliderSlick-js arrow-slick-main">
				<!-- seccion del Slider -->
				<div class="slide">
					<div class="img--holder">
						<picture>
							<source srcset="{{asset('assets/front/images/slides-06/slide-01-sm.webp')}}" media="(max-width: 767px)" type="image/webp">
							<source srcset="{{asset('assets/front/images/slides-06/slide-01-sm.jpg')}}" media="(max-width: 767px)" type="image/jpg">
							<source srcset="{{asset('assets/front/images/slides-06/slide-01-md.webp')}}" media="(max-width: 1024px)" type="image/webp">
							<source srcset="{{asset('assets/front/images/slides-06/slide-01-md.jpg')}}" media="(max-width: 1024px)" type="image/jpg">
							<source srcset="{{asset('assets/front/images/slides-06/slide-01.webp')}}" type="image/webp">
							<source srcset="{{asset('assets/front/images/slides-06/slide-01.jpg')}}" type="image/jpg">
							<img src="{{asset('assets/front/images/slides-06/slide-01-sm.webp')}}" alt="">
						</picture>
					</div>
					<div class="slide-content text-center">
						<div class="pt-container">
							<div class="tp-caption1-wd-1 pt-white-color">NEED-IT-NOW</div>
							<div class="tp-caption1-wd-2 pt-white-color">Must-Haves<br>for the Season</div>
							<div class="tp-caption1-wd-3 pt-white-color">Contemporary, minimal and beautifully iconic.</div>
							<div class="tp-caption1-wd-4"><a href="listing-left-column.html" target="_blank" class="btn" data-text="Discover Now!">DISCOVER NOW!</a></div>
						</div>
					</div>
				</div>
				<div class="slide">
					<div class="img--holder">
						<picture>
							<source srcset="{{asset('assets/front/images/slides-06/slide-02-sm.webp')}}" media="(max-width: 767px)" type="image/webp">
							<source srcset="{{asset('assets/front/images/slides-06/slide-02-sm.jpg')}}" media="(max-width: 767px)" type="image/jpg">
							<source srcset="{{asset('assets/front/images/slides-06/slide-02-md.webp')}}" media="(max-width: 1024px)" type="image/webp">
							<source srcset="{{asset('assets/front/images/slides-06/slide-02-md.jpg')}}" media="(max-width: 1024px)" type="image/jpg">
							<source srcset="{{asset('assets/front/images/slides-06/slide-02.webp')}}" type="image/webp">
							<source srcset="{{asset('assets/front/images/slides-06/slide-02.jpg')}}" type="image/jpg">
							<img src="{{asset('assets/front/images/slides-06/slide-02-sm.webp')}}" alt="">
						</picture>
					</div>
					<div class="slide-content pt-point-h-l">
						<div class="pt-container" data-animation="fadeInUpSm" data-animation-delay="0s">
							<div class="tp-caption1-wd-1">NEW COLLETION</div>
							<div class="tp-caption1-wd-2">Find Your New<br>Favorite Shorts</div>
							<div class="tp-caption1-wd-3 pt-text-color">Keep perfect time with the contemporary, expertly-crafted designs.</div>
							<div class="tp-caption1-wd-4"><a href="listing-left-column.html" target="_blank" class="btn" data-text="DISCOVER NOW!">DISCOVER NOW!</a></div>
						</div>
					</div>
				</div>
				<div class="slide">
					<div class="img--holder">
						<picture>
							<source srcset="{{asset('assets/front/images/slides-06/slide-03-sm.webp')}}" media="(max-width: 767px)" type="image/webp">
							<source srcset="{{asset('assets/front/images/slides-06/slide-03-sm.jpg')}}" media="(max-width: 767px)" type="image/jpg">
							<source srcset="{{asset('assets/front/images/slides-06/slide-03-md.webp')}}" media="(max-width: 1024px)" type="image/webp">
							<source srcset="{{asset('assets/front/images/slides-06/slide-03-md.jpg')}}" media="(max-width: 1024px)" type="image/jpg">
							<source srcset="{{asset('assets/front/images/slides-06/slide-03.webp')}}" type="image/webp">
							<source srcset="{{asset('assets/front/images/slides-06/slide-03.jpg')}}" type="image/jpg">
							<img src="{{asset('assets/front/images/slides-06/slide-03-sm.webp')}}" alt="">
						</picture>
					</div>
					<div class="slide-content pt-point-h-r">
						<div class="pt-container" data-animation="fadeInRightSm" data-animation-delay="0s">
							<div class="tp-caption1-wd-1 pt-white-color">DON'T MISS TODAY'S FEATURED DEALS</div>
							<div class="tp-caption1-wd-2 pt-white-color">Get up to<br>50% Off</div>
							<div class="tp-caption1-wd-3 pt-white-color">Here to bring your life style to the next level.</div>
							<div class="tp-caption1-wd-4"><a href="listing-left-column.html" target="_blank" class="btn" data-text="DISCOVER NOW!">DISCOVER NOW!</a></div>
						</div>
					</div>
				</div>
				<!-- fin de la seccion del slider -->
			</div>
		</div>
	</div>
	<div class="pt-offset-10 container-indent">
		<div class="container-fluid">
			<div class="pt-layout-promo-box">
				<div class="row">
					<div class="col-sm-6 col-md-4">
						<a href="#" class="pt-promo-box">
							<div class="image-box">
								<img src="{{asset('assets/front/images/promo/index06-promo-01.jpg')}}" alt="">
							</div>
							<div class="pt-description pr-promo-type2 pt-promo-wrapper pt-one-child">
								<div class="pt-description-wrapper">
									<div class="pt-title-small"><span>New</span></div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-sm-6 col-md-4">
						<a href="#" class="pt-promo-box">
							<div class="image-box">
								<img src="{{asset('assets/front/images/promo/index06-promo-02.jpg')}}" alt="">
							</div>
							<div class="pt-description pr-promo-type2 pt-promo-wrapper pt-one-child">
								<div class="pt-description-wrapper">
									<div class="pt-title-small"><span>Trending</span></div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-sm-6 col-md-4">
						<a href="#" class="pt-promo-box">
							<div class="image-box">
								<img src="{{asset('assets/front/images/promo/index06-promo-03.jpg')}}" alt="">
							</div>
							<div class="pt-description pr-promo-type2 pt-promo-wrapper pt-one-child">
								<div class="pt-description-wrapper">
									<div class="pt-title-small"><span>Sale</span></div>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-indent">
		<div class="container container-fluid-custom-mobile-padding">
			<div class="pt-block-title">
				<h4 class="pt-title">Ultimos productos agregados.</h4>
			</div>
			<div class="row arrow-location-center-02 pt-layout-product-item">
				@foreach($productos as $producto)
					<div class="col-6 col-md-4 col-lg-3 col-xl-custom-5">
						<div class="pt-product" data-rollover="{{$producto -> imagen}}">
							<div class="pt-image-box">
								<a href="{{$producto -> id}}">
									<div class="pt-img">
										<img src="{{ asset($producto -> imagen) }}" alt="">
									</div>
								</a>
							</div>
							<div class="pt-description">
								<div class="pt-col">
									<ul class="pt-add-info">
										<li><a href="{{$producto -> id}}">{{$producto -> descripcion}}</a></li>
									</ul>
									<h2 class="pt-title"><a href="{{$producto -> id}}">{{$producto -> nombre}}</a></h2>
									<div class="pt-price">
									{{$producto -> precio}}
									</div>
								</div>
								<div class="pt-col">
									<div class="pt-row-hover">
										<a href="#" class="pt-btn-addtocart" data-toggle="modal" data-target="#modalAddToCart">
											<div class="pt-icon">
												<svg><use xlink:href="#icon-cart_1"></use></svg>
												<svg><use xlink:href="#icon-cart_1_plus"></use></svg>
												<svg><use xlink:href="#icon-cart_1_disable"></use></svg>
											</div>
											<span class="pt-text">Al carrito</span>
										</a>
										<div class="pt-price">
												{{$producto -> precio}}
										</div>									
									</div>
								</div>
							</div>
						</div>
					</div>
				@endforeach
			</div>
			<ul class="pagination float-end mb-4">
				{{ $productos->links() }}    
			</ul>
		</div>
	</div>
</main>

@endsection()