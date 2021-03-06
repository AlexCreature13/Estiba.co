@extends('templateFront')
@section('Contenido')

    <div class="pt-desktop-header">
            <div class="container-fluid">
                <div class="headinfo-box form-inline">
                    <!-- logo -->
                    <div class="pt-logo pt-logo-alignment" itemscope itemtype="http://schema.org/Organization">
                            <a href="index.html" itemprop="url">
                                <h2 class="pt-title">Yanka</h2>
                            </a>
                        </div>
                    <!-- /logo -->
                    <div class="navinfo text-left">
                        <!-- pt-menu -->
                        <div class="pt-desctop-parent-menu">
                            <div class="pt-desctop-menu" id="js-include-desktop-menu"></div>
                        </div>
                        <!-- /pt-menu -->
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
                                                <input type="text" class="pt-search-input" placeholder="Search products...">
                                                <button class="pt-btn-search" type="submit">
                                                    <svg width="24" height="24" viewBox="0 0 24 24">
                                                        <use xlink:href="#icon-search"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="pt-col">
                                                <button class="pt-btn-close">
                                                    <svg width="16" height="16" viewBox="0 0 16 16">
                                                        <use xlink:href="#icon-close"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="pt-info-text">
                                                What are you Looking for?
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
                                            <li><a href="page-login.html">
                                                <i class="pt-icon">
                                                    <svg width="18" height="23">
                                                        <use xlink:href="#icon-lock"></use>
                                                    </svg>
                                                </i>
                                                <span class="pt-text">Sign In</span>
                                            </a></li>
                                            <li><a href="page-registration.html">
                                                <i class="pt-icon pt-align-icon">
                                                    <svg width="24" height="24">
                                                        <use xlink:href="#icon-user"></use>
                                                    </svg>
                                                </i>
                                                <span class="pt-text">Register</span>
                                            </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /pt-account -->
                        <!-- pt-compare -->
                        <div class="pt-desctop-parent-compare pt-parent-box">
                            <div class="pt-compare pt-dropdown-obj">
                                <a href="page-compare.html" class="pt-dropdown-toggle" data-tooltip="Compare" data-tposition="bottom">
                                    <span class="pt-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24">
                                            <use xlink:href="#icon-compare"></use>
                                        </svg>
                                    </span>
                                    <span class="pt-text">Compare</span>
                                    <span class="pt-badge">4</span>
                                </a>
                            </div>
                        </div>
                        <!-- /pt-compare -->
                        <!-- pt-wishlist -->
                        <div class="pt-desctop-parent-wishlist pt-parent-box">
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
                        </div>
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
                        <div class="pt-desctop-parent-language pt-parent-box">
                            <div class="pt-language pt-dropdown-obj02 js-dropdown">
        <button class="pt-dropdown-toggle" data-tooltip="Language" data-tposition="bottom">
            <span class="pt-dropdown-value">Eng</span>
            <span class="pt-icon">
                <svg width="12" height="7" viewBox="0 0 12 7">
                    <use xlink:href="#icon-arrow_small_bottom"></use>
                </svg>
            </span>
        </button>
        <div class="pt-dropdown-menu">
            <div class="pt-dropdown-inner">
                <ul>
                    <li><a data-value="English" href="#">Eng</a></li>
                    <li><a data-value="German" href="#">Ger</a></li>
                    <li><a data-value="Spanish" href="#">Span</a></li>
                </ul>
            </div>
        </div>
    </div>
                        </div>
                        <div class="pt-desctop-parent-currency pt-parent-box">
                            <div class="pt-currency pt-dropdown-obj02 js-dropdown">
                                    <button class="pt-dropdown-toggle"  data-tooltip="Currency" data-tposition="bottom">
                                        <span class="pt-dropdown-value">USD</span>
                                        <span class="pt-icon">
                                            <svg width="12" height="7" viewBox="0 0 12 7">
                                                <use xlink:href="#icon-arrow_small_bottom"></use>
                                            </svg>
                                        </span>
                                    </button>
                                    <div class="pt-dropdown-menu">
                                        <div class="pt-dropdown-inner">
                                            <ul>
                                                <li><a data-value="USD" href="#">$&nbsp;&nbsp;US Dollars</a></li>
                                                <li><a data-value="EUR" href="#">???&nbsp;&nbsp;Euro</a></li>
                                                <li><a data-value="GBR" href="#">??&nbsp;&nbsp;British Pounds</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- stuck nav -->
        <div class="pt-stuck-nav">
            <div class="container-fluid">
                <div class="pt-header-row">
                    <div class="pt-stuck-parent-menu"></div>
                    <div class="pt-logo-container">
                        <!-- mobile logo -->
                        <div class="pt-logo pt-logo-alignment" itemscope itemtype="http://schema.org/Organization">
                            <a href="index.html" itemprop="url">
                                <h2 class="pt-title">Yanka</h2>
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
    <div class="pt-breadcrumb">
        <div class="container-fluid">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li>Selected Menu Item</li>
            </ul>
        </div>
    </div>
    <div id="pt-pageContent">
        <div class="container-indent pt-offset-md-productsingle">
            <!-- mobile product slider  -->
            <div id="js-init-mobile-productsingle" class="visible-xs arrow-location-center slick-animated-show-js">
                <div><img src="images/product/product-20.jpg" alt=""></div>
                <div><img src="images/product/product-20-02.jpg" alt=""></div>
                <div><img src="images/product/product-20-03.jpg" alt=""></div>
                <div>
                    <div class="pt-video-block">
                        <a href="#" class="link-video">
                            <span class="pt-icon-play">
                                <svg>
                                    <use xlink:href="#icon-play"></use>
                                </svg>
                            </span>
                            <span class="pt-icon-pause">
                                <svg>
                                    <use xlink:href="#icon-pause"></use>
                                </svg>
                            </span>
                        </a>
                        <video class="movie" src="video/video.mp4" poster="video/video_img02.jpg"></video>
                    </div>
                </div>
            </div>
            <!-- /mobile product slider  -->
            <div class="container container-mobile-airSticky">
                <div class="row airSticky_stop-block">
                    <div class="col-6 hidden-xs">
                        <div class="product-images-static hidden-xs">
                            <button class="pt-btn-zoom" id="js-btnzoom-gallery">
                                <svg>
                                    <use xlink:href="#icon-quick_view"></use>
                            </svg>
                            </button>
                            <ul data-scrollzoom="false" id="js-layout-gallery">
                                <li><a href="images/product/product-20.jpg" class="pt-gallery-link"><img class="zoom-product" src="images/product/product-20.jpg" alt=""></a></li>
                                <li><a href="images/product/product-20-02.jpg" class="pt-gallery-link"><img class="zoom-product" src="images/product/product-20-02.jpg" alt=""></a></li>
                                <li><a href="images/product/product-20-03.jpg" class="pt-gallery-link"><img class="zoom-product" src="images/product/product-20-03.jpg" alt=""></a></li>
                                <li>
                                    <div class="pt-video-block">
                                        <a href="#" class="link-video">
                                            <span class="pt-icon-play">
                                                <svg>
                                                    <use xlink:href="#icon-play"></use>
                                            </svg>
                                            </span>
                                            <span class="pt-icon-pause">
                                                <svg>
                                                    <use xlink:href="#icon-pause"></use>
                                            </svg>
                                            </span>
                                        </a>
                                        <video class="movie" src="video/video.mp4" poster="video/video_img02.jpg"></video>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="airSticky">
                            <div class="pt-product-single-info">
                                <div class="pt-wrapper">
                                <div class="pt-label">
                                    <div class="pt-label-out-stock">OUT OF STOCK</div>
                                </div>
                            </div>
                                <h1 class="pt-title">Push Up Low Rise Jeans</h1>
                                <div class="pt-price">
                                    $47.89
                                </div>
                                <div class="pt-review">
                                    <div class="pt-rating">
                                        <i class="pt-star"><svg><use xlink:href="#icon-review"></use></svg></i>
                                        <i class="pt-star"><svg><use xlink:href="#icon-review"></use></svg></i>
                                        <i class="pt-star"><svg><use xlink:href="#icon-review"></use></svg></i>
                                        <i class="pt-star"><svg><use xlink:href="#icon-review"></use></svg></i>
                                        <i><svg><use xlink:href="#icon-review"></use></svg></i>
                                    </div>
                                    <a href="#" class="btn-link btn-lg pt-color-base"><span class="pt-text">2 reviews</span></a>
                                </div>
                                <div class="pt-add-info">
                                    <ul>
                                        <li><span>SKU:</span> 8</li>
                                        <li><span>Vendor:</span> <a href="page404.html" target="_blank">Levis</a></li>
                                        <li><span>Product Type:</span> <a href="page404.html" target="_blank">Shirt</a></li>
                                    </ul>
                                </div>
                                <div class="pt-swatches-container">
                                    <div class="pt-wrapper">
                                        <div class="pt-title-options">Color: <strong>White</strong></div>
                                        <ul class="pt-options-swatch">
                                            <li class="active"><a href="#" class="options-color-img" data-src="images/product/product-01-02.jpg"></a></li>
                                            <li><a href="#" class="options-color-img" data-src="images/product/product-01-06.jpg"></a></li>
                                        </ul>
                                    </div>
                                    <div class="pt-wrapper">
                                        <div class="pt-title-options">Size: <strong>XS</strong></div>
                                        <ul class="pt-options-swatch size-middle">
                                            <li><a href="#">XS</a></li>
                                            <li class="active"><a href="#">S</a></li>
                                            <li><a href="#">M</a></li>
                                            <li data-variant_availability="false"><a href="#">L</a></li>
                                            <li><a href="#">XL</a></li>
                                            <li><a href="#">XXL</a></li>
                                            <li><a href="#">XXXL</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pt-wrapper">
                                    <div class="pt-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                                    </div>
                                </div>
                                <div class="pt-wrapper">
                                    <div class="product-information-buttons">
                                        <a data-toggle="modal" data-target="#modalProductInfo" href="#">
                                            <span class="pt-icon">
                                                <svg>
                                                    <use xlink:href="#icon-services_size_guide"></use>
                                            </svg>
                                            </span>
                                            <span class="pt-text">
                                                Size guide
                                            </span>
                                        </a>
                                        <a data-toggle="modal" data-target="#modalProductInfo-02" href="#">
                                            <span class="pt-icon">
                                                <svg>
                                                    <use xlink:href="#icon-services_delivery"></use>
                                            </svg>
                                            </span>
                                            <span class="pt-text">
                                                Shipping
                                            </span>
                                        </a>
                                        <a data-toggle="modal" data-target="#modalProductInfo-03" href="#">
                                            <span class="pt-icon">
                                                <svg>
                                                    <use xlink:href="#icon-mail"></use>
                                            </svg>
                                            </span>
                                            <span class="pt-text">
                                                Ask about this product
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="pt-wrapper">
                                    <div class="pt-row-custom-01">
                                        <div class="col-item">
                                            <div class="pt-input-counter style-01">
                                                <span class="minus-btn">
                                                    <svg>
                                                        <use xlink:href="#icon_minus"></use>
                                                    </svg>
                                                </span>
                                                <input type="text" value="1" size="5">
                                                <span class="plus-btn">
                                                    <svg>
                                                        <use xlink:href="#icon_add"></use>
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-item">
                                            <a href="#" class="btn btn-lg">
                                                <div class="pt-icon">
                                                    <svg>
                                                        <use xlink:href="#icon-cart_1"></use>
                                                    </svg>
                                                </div>
                                                <span class="pt-text">
                                                    ADD TO CART
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-wrapper">
                                    <ul class="pt-list-btn">
                                        <li>
                                            <a href="page-wishlist.html" class="btn btn-border">
                                                <div class="pt-icon">
                                                    <svg>
                                                        <use xlink:href="#icon-wishlist"></use>
                                                    </svg>
                                                </div>
                                                <span class="pt-text">
                                                    Add to wishlist
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="page-compare.html" class="btn btn-border">
                                                <div class="pt-icon">
                                                    <svg>
                                                        <use xlink:href="#icon-compare"></use>
                                                    </svg>
                                                </div>
                                                <span class="pt-text">
                                                    Add to compare
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pt-wrapper">
                                    <div class="pt-row-custom-03">
                                        <div class="col-item">
                                            <div class="checkbox-group">
                                                <input type="checkbox" id="checkBox01" name="checkbox" checked="">
                                                <label for="checkBox01">
                                                    <span class="check"></span>
                                                    <span class="box"></span>
                                                    I agree with the terms and conditions
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-item">
                                            <a href="#" class="btn btn-dark">
                                                <span class="pt-text">
                                                    Buy it now!
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-wrapper">
                                    <div class="pt-promo-brand">
                                        <svg width="571" height="86" viewBox="0 0 571 86" fill="none">
        <rect x="0.5" y="12.5" width="569" height="73" fill="white" stroke="#EBEBEB"/>
        <rect x="155" y="12" width="262" height="1" fill="white"/>
        <path d="M178.347 9.224V17H176.115L175.845 15.956C175.017 16.772 173.877 17.18 172.425 17.18C171.165 17.18 170.007 16.874 168.951 16.262C167.895 15.638 167.055 14.798 166.431 13.742C165.819 12.674 165.513 11.51 165.513 10.25C165.513 8.99 165.819 7.832 166.431 6.776C167.055 5.708 167.895 4.868 168.951 4.256C170.019 3.632 171.183 3.32 172.443 3.32C173.511 3.32 174.519 3.554 175.467 4.022C176.427 4.49 177.225 5.132 177.861 5.948L175.557 7.712C175.197 7.256 174.747 6.902 174.207 6.65C173.667 6.386 173.079 6.254 172.443 6.254C171.699 6.254 171.021 6.428 170.409 6.776C169.797 7.124 169.317 7.604 168.969 8.216C168.621 8.828 168.447 9.506 168.447 10.25C168.447 10.994 168.615 11.672 168.951 12.284C169.299 12.896 169.773 13.376 170.373 13.724C170.985 14.072 171.669 14.246 172.425 14.246C173.025 14.246 173.583 14.132 174.099 13.904C174.615 13.676 175.053 13.364 175.413 12.968V11.87H172.911V9.224H178.347ZM184.726 17.18C183.382 17.18 182.338 16.856 181.594 16.208C180.862 15.56 180.496 14.672 180.496 13.544V8H183.376V13.184C183.376 13.592 183.502 13.934 183.754 14.21C184.018 14.486 184.342 14.624 184.726 14.624C185.11 14.624 185.434 14.486 185.698 14.21C185.962 13.934 186.094 13.592 186.094 13.184V8H188.974V13.544C188.974 14.672 188.602 15.56 187.858 16.208C187.126 16.856 186.082 17.18 184.726 17.18ZM200.687 8V17H197.789V16.154C197.165 16.838 196.301 17.18 195.197 17.18C194.393 17.18 193.655 16.976 192.983 16.568C192.311 16.148 191.777 15.584 191.381 14.876C190.997 14.156 190.805 13.364 190.805 12.5C190.805 11.636 190.997 10.85 191.381 10.142C191.777 9.422 192.311 8.858 192.983 8.45C193.655 8.03 194.393 7.82 195.197 7.82C196.301 7.82 197.165 8.162 197.789 8.846V8H200.687ZM195.809 14.624C196.409 14.624 196.913 14.42 197.321 14.012C197.729 13.592 197.933 13.088 197.933 12.5C197.933 11.9 197.729 11.396 197.321 10.988C196.913 10.58 196.409 10.376 195.809 10.376C195.221 10.376 194.717 10.58 194.297 10.988C193.889 11.396 193.685 11.9 193.685 12.5C193.685 13.088 193.889 13.592 194.297 14.012C194.717 14.42 195.221 14.624 195.809 14.624ZM208.411 7.874C208.663 7.874 208.891 7.916 209.095 8V10.556C208.867 10.472 208.603 10.43 208.303 10.43C207.679 10.43 207.175 10.628 206.791 11.024C206.419 11.42 206.233 11.978 206.233 12.698V17H203.353V8H206.233V9.296C206.485 8.852 206.797 8.504 207.169 8.252C207.553 8 207.967 7.874 208.411 7.874ZM219.671 8V17H216.773V16.154C216.149 16.838 215.285 17.18 214.181 17.18C213.377 17.18 212.639 16.976 211.967 16.568C211.295 16.148 210.761 15.584 210.365 14.876C209.981 14.156 209.789 13.364 209.789 12.5C209.789 11.636 209.981 10.85 210.365 10.142C210.761 9.422 211.295 8.858 211.967 8.45C212.639 8.03 213.377 7.82 214.181 7.82C215.285 7.82 216.149 8.162 216.773 8.846V8H219.671ZM214.793 14.624C215.393 14.624 215.897 14.42 216.305 14.012C216.713 13.592 216.917 13.088 216.917 12.5C216.917 11.9 216.713 11.396 216.305 10.988C215.897 10.58 215.393 10.376 214.793 10.376C214.205 10.376 213.701 10.58 213.281 10.988C212.873 11.396 212.669 11.9 212.669 12.5C212.669 13.088 212.873 13.592 213.281 14.012C213.701 14.42 214.205 14.624 214.793 14.624ZM227.809 7.82C228.397 7.82 228.937 7.97 229.429 8.27C229.921 8.57 230.305 8.984 230.581 9.512C230.869 10.04 231.013 10.622 231.013 11.258V17H228.133V11.618C228.133 11.234 228.001 10.928 227.737 10.7C227.485 10.472 227.161 10.358 226.765 10.358C226.321 10.358 225.949 10.496 225.649 10.772C225.361 11.036 225.217 11.372 225.217 11.78V17H222.337V8H225.217V8.972C225.541 8.588 225.925 8.3 226.369 8.108C226.825 7.916 227.305 7.82 227.809 7.82ZM238.665 10.214H237.009V17H234.111V10.214H232.455V8H234.111V4.76H237.009V8H238.665V10.214ZM248.698 13.058H242.236C242.32 13.634 242.542 14.084 242.902 14.408C243.262 14.732 243.7 14.894 244.216 14.894C244.66 14.894 245.05 14.804 245.386 14.624C245.722 14.432 245.986 14.15 246.178 13.778L248.482 14.714C248.134 15.47 247.588 16.07 246.844 16.514C246.1 16.958 245.26 17.18 244.324 17.18C243.232 17.18 242.308 16.976 241.552 16.568C240.808 16.16 240.25 15.608 239.878 14.912C239.506 14.204 239.32 13.4 239.32 12.5C239.32 11.624 239.518 10.832 239.914 10.124C240.31 9.404 240.874 8.84 241.606 8.432C242.35 8.012 243.214 7.802 244.198 7.802C245.086 7.802 245.872 7.988 246.556 8.36C247.252 8.732 247.786 9.266 248.158 9.962C248.542 10.658 248.734 11.474 248.734 12.41L248.698 13.058ZM244.126 10.016C243.694 10.016 243.334 10.124 243.046 10.34C242.758 10.556 242.542 10.856 242.398 11.24H245.782C245.662 10.832 245.464 10.526 245.188 10.322C244.924 10.118 244.57 10.016 244.126 10.016ZM259.509 13.058H253.047C253.131 13.634 253.353 14.084 253.713 14.408C254.073 14.732 254.511 14.894 255.027 14.894C255.471 14.894 255.861 14.804 256.197 14.624C256.533 14.432 256.797 14.15 256.989 13.778L259.293 14.714C258.945 15.47 258.399 16.07 257.655 16.514C256.911 16.958 256.071 17.18 255.135 17.18C254.043 17.18 253.119 16.976 252.363 16.568C251.619 16.16 251.061 15.608 250.689 14.912C250.317 14.204 250.131 13.4 250.131 12.5C250.131 11.624 250.329 10.832 250.725 10.124C251.121 9.404 251.685 8.84 252.417 8.432C253.161 8.012 254.025 7.802 255.009 7.802C255.897 7.802 256.683 7.988 257.367 8.36C258.063 8.732 258.597 9.266 258.969 9.962C259.353 10.658 259.545 11.474 259.545 12.41L259.509 13.058ZM254.937 10.016C254.505 10.016 254.145 10.124 253.857 10.34C253.569 10.556 253.353 10.856 253.209 11.24H256.593C256.473 10.832 256.275 10.526 255.999 10.322C255.735 10.118 255.381 10.016 254.937 10.016ZM270.805 2.6V17H267.907V16.172C267.271 16.844 266.413 17.18 265.333 17.18C264.529 17.18 263.791 16.976 263.119 16.568C262.447 16.148 261.913 15.584 261.517 14.876C261.133 14.156 260.941 13.364 260.941 12.5C260.941 11.636 261.133 10.85 261.517 10.142C261.913 9.422 262.447 8.858 263.119 8.45C263.791 8.03 264.529 7.82 265.333 7.82C266.413 7.82 267.271 8.156 267.907 8.828V2.6H270.805ZM265.945 14.624C266.545 14.624 267.049 14.42 267.457 14.012C267.865 13.592 268.069 13.088 268.069 12.5C268.069 11.9 267.865 11.396 267.457 10.988C267.049 10.58 266.545 10.376 265.945 10.376C265.357 10.376 264.853 10.58 264.433 10.988C264.025 11.396 263.821 11.9 263.821 12.5C263.821 13.088 264.025 13.592 264.433 14.012C264.853 14.42 265.357 14.624 265.945 14.624ZM282.358 17.18C281.23 17.18 280.21 16.898 279.298 16.334C278.386 15.77 277.708 15.05 277.264 14.174L279.676 12.68C279.916 13.232 280.27 13.664 280.738 13.976C281.218 14.288 281.77 14.444 282.394 14.444C282.922 14.444 283.336 14.33 283.636 14.102C283.936 13.874 284.086 13.556 284.086 13.148C284.086 12.836 283.984 12.572 283.78 12.356C283.576 12.14 283.324 11.96 283.024 11.816C282.724 11.672 282.286 11.498 281.71 11.294C280.918 11.018 280.258 10.748 279.73 10.484C279.214 10.208 278.77 9.812 278.398 9.296C278.038 8.768 277.858 8.096 277.858 7.28C277.858 6.428 278.062 5.708 278.47 5.12C278.878 4.52 279.406 4.07 280.054 3.77C280.702 3.47 281.398 3.32 282.142 3.32C282.946 3.32 283.708 3.494 284.428 3.842C285.148 4.178 285.76 4.64 286.264 5.228L284.338 7.082C283.642 6.29 282.898 5.894 282.106 5.894C281.71 5.894 281.386 5.996 281.134 6.2C280.882 6.404 280.756 6.698 280.756 7.082C280.756 7.514 280.942 7.85 281.314 8.09C281.686 8.33 282.256 8.576 283.024 8.828C283.84 9.116 284.512 9.404 285.04 9.692C285.568 9.98 286.024 10.406 286.408 10.97C286.792 11.534 286.984 12.272 286.984 13.184C286.984 13.988 286.774 14.696 286.354 15.308C285.946 15.908 285.388 16.37 284.68 16.694C283.972 17.018 283.198 17.18 282.358 17.18ZM298.087 8V17H295.189V16.154C294.565 16.838 293.701 17.18 292.597 17.18C291.793 17.18 291.055 16.976 290.383 16.568C289.711 16.148 289.177 15.584 288.781 14.876C288.397 14.156 288.205 13.364 288.205 12.5C288.205 11.636 288.397 10.85 288.781 10.142C289.177 9.422 289.711 8.858 290.383 8.45C291.055 8.03 291.793 7.82 292.597 7.82C293.701 7.82 294.565 8.162 295.189 8.846V8H298.087ZM293.209 14.624C293.809 14.624 294.313 14.42 294.721 14.012C295.129 13.592 295.333 13.088 295.333 12.5C295.333 11.9 295.129 11.396 294.721 10.988C294.313 10.58 293.809 10.376 293.209 10.376C292.621 10.376 292.117 10.58 291.697 10.988C291.289 11.396 291.085 11.9 291.085 12.5C291.085 13.088 291.289 13.592 291.697 14.012C292.117 14.42 292.621 14.624 293.209 14.624ZM306.189 10.232H304.065V17H301.167V10.232H299.655V8H301.167V5.822C301.167 4.778 301.473 3.944 302.085 3.32C302.709 2.696 303.543 2.384 304.587 2.384C304.947 2.384 305.265 2.414 305.541 2.474C305.829 2.522 306.033 2.588 306.153 2.672V5.264C306.021 5.156 305.859 5.072 305.667 5.012C305.487 4.952 305.307 4.922 305.127 4.922C304.791 4.922 304.527 5.036 304.335 5.264C304.155 5.48 304.065 5.78 304.065 6.164V8H306.189V10.232ZM316.022 13.058H309.56C309.644 13.634 309.866 14.084 310.226 14.408C310.586 14.732 311.024 14.894 311.54 14.894C311.984 14.894 312.374 14.804 312.71 14.624C313.046 14.432 313.31 14.15 313.502 13.778L315.806 14.714C315.458 15.47 314.912 16.07 314.168 16.514C313.424 16.958 312.584 17.18 311.648 17.18C310.556 17.18 309.632 16.976 308.876 16.568C308.132 16.16 307.574 15.608 307.202 14.912C306.83 14.204 306.644 13.4 306.644 12.5C306.644 11.624 306.842 10.832 307.238 10.124C307.634 9.404 308.198 8.84 308.93 8.432C309.674 8.012 310.538 7.802 311.522 7.802C312.41 7.802 313.196 7.988 313.88 8.36C314.576 8.732 315.11 9.266 315.482 9.962C315.866 10.658 316.058 11.474 316.058 12.41L316.022 13.058ZM311.45 10.016C311.018 10.016 310.658 10.124 310.37 10.34C310.082 10.556 309.866 10.856 309.722 11.24H313.106C312.986 10.832 312.788 10.526 312.512 10.322C312.248 10.118 311.894 10.016 311.45 10.016ZM329.329 17.18C328.069 17.18 326.905 16.874 325.837 16.262C324.781 15.638 323.941 14.798 323.317 13.742C322.705 12.674 322.399 11.51 322.399 10.25C322.399 8.99 322.705 7.832 323.317 6.776C323.941 5.708 324.781 4.868 325.837 4.256C326.905 3.632 328.069 3.32 329.329 3.32C330.397 3.32 331.405 3.554 332.353 4.022C333.313 4.49 334.111 5.132 334.747 5.948L332.443 7.712C332.083 7.256 331.633 6.902 331.093 6.65C330.553 6.386 329.965 6.254 329.329 6.254C328.585 6.254 327.907 6.428 327.295 6.776C326.683 7.124 326.197 7.604 325.837 8.216C325.489 8.828 325.315 9.506 325.315 10.25C325.315 10.994 325.489 11.672 325.837 12.284C326.197 12.896 326.683 13.376 327.295 13.724C327.907 14.072 328.585 14.246 329.329 14.246C329.965 14.246 330.553 14.12 331.093 13.868C331.633 13.604 332.083 13.244 332.443 12.788L334.747 14.552C334.111 15.368 333.313 16.01 332.353 16.478C331.405 16.946 330.397 17.18 329.329 17.18ZM341.871 7.82C342.507 7.82 343.077 7.97 343.581 8.27C344.085 8.57 344.475 8.984 344.751 9.512C345.039 10.028 345.183 10.61 345.183 11.258V17H342.303V11.618C342.303 11.234 342.171 10.928 341.907 10.7C341.655 10.472 341.331 10.358 340.935 10.358C340.491 10.358 340.119 10.496 339.819 10.772C339.531 11.036 339.387 11.372 339.387 11.78V17H336.507V2.6H339.387V8.972C340.023 8.204 340.851 7.82 341.871 7.82ZM356.399 13.058H349.937C350.021 13.634 350.243 14.084 350.603 14.408C350.963 14.732 351.401 14.894 351.917 14.894C352.361 14.894 352.751 14.804 353.087 14.624C353.423 14.432 353.687 14.15 353.879 13.778L356.183 14.714C355.835 15.47 355.289 16.07 354.545 16.514C353.801 16.958 352.961 17.18 352.025 17.18C350.933 17.18 350.009 16.976 349.253 16.568C348.509 16.16 347.951 15.608 347.579 14.912C347.207 14.204 347.021 13.4 347.021 12.5C347.021 11.624 347.219 10.832 347.615 10.124C348.011 9.404 348.575 8.84 349.307 8.432C350.051 8.012 350.915 7.802 351.899 7.802C352.787 7.802 353.573 7.988 354.257 8.36C354.953 8.732 355.487 9.266 355.859 9.962C356.243 10.658 356.435 11.474 356.435 12.41L356.399 13.058ZM351.827 10.016C351.395 10.016 351.035 10.124 350.747 10.34C350.459 10.556 350.243 10.856 350.099 11.24H353.483C353.363 10.832 353.165 10.526 352.889 10.322C352.625 10.118 352.271 10.016 351.827 10.016ZM362.854 17.18C361.918 17.18 361.066 16.982 360.298 16.586C359.53 16.19 358.924 15.638 358.48 14.93C358.048 14.21 357.832 13.4 357.832 12.5C357.832 11.6 358.048 10.796 358.48 10.088C358.924 9.368 359.53 8.81 360.298 8.414C361.066 8.018 361.918 7.82 362.854 7.82C363.898 7.82 364.816 8.072 365.608 8.576C366.412 9.08 367 9.806 367.372 10.754L364.834 11.744C364.702 11.324 364.456 10.994 364.096 10.754C363.736 10.502 363.322 10.376 362.854 10.376C362.218 10.376 361.702 10.574 361.306 10.97C360.91 11.354 360.712 11.864 360.712 12.5C360.712 13.136 360.91 13.652 361.306 14.048C361.702 14.432 362.218 14.624 362.854 14.624C363.322 14.624 363.736 14.504 364.096 14.264C364.456 14.012 364.702 13.676 364.834 13.256L367.372 14.246C367 15.194 366.412 15.92 365.608 16.424C364.816 16.928 363.898 17.18 362.854 17.18ZM375.002 17L371.924 12.986V17H369.044V2.6H371.924V11.15L374.966 8H378.44L374.498 12.068L378.764 17H375.002ZM384.053 17.18C383.129 17.18 382.283 16.976 381.515 16.568C380.759 16.148 380.159 15.584 379.715 14.876C379.271 14.156 379.049 13.364 379.049 12.5C379.049 11.636 379.271 10.85 379.715 10.142C380.159 9.422 380.759 8.858 381.515 8.45C382.283 8.03 383.129 7.82 384.053 7.82C384.977 7.82 385.823 8.03 386.591 8.45C387.359 8.858 387.965 9.422 388.409 10.142C388.853 10.85 389.075 11.636 389.075 12.5C389.075 13.364 388.853 14.156 388.409 14.876C387.965 15.584 387.359 16.148 386.591 16.568C385.823 16.976 384.977 17.18 384.053 17.18ZM384.053 14.624C384.653 14.624 385.157 14.42 385.565 14.012C385.973 13.592 386.177 13.088 386.177 12.5C386.177 11.9 385.973 11.396 385.565 10.988C385.157 10.58 384.653 10.376 384.053 10.376C383.465 10.376 382.961 10.58 382.541 10.988C382.133 11.396 381.929 11.9 381.929 12.5C381.929 13.088 382.133 13.592 382.541 14.012C382.961 14.42 383.465 14.624 384.053 14.624ZM395.136 17.18C393.792 17.18 392.748 16.856 392.004 16.208C391.272 15.56 390.906 14.672 390.906 13.544V8H393.786V13.184C393.786 13.592 393.912 13.934 394.164 14.21C394.428 14.486 394.752 14.624 395.136 14.624C395.52 14.624 395.844 14.486 396.108 14.21C396.372 13.934 396.504 13.592 396.504 13.184V8H399.384V13.544C399.384 14.672 399.012 15.56 398.268 16.208C397.536 16.856 396.492 17.18 395.136 17.18ZM407.029 10.214H405.373V17H402.475V10.214H400.819V8H402.475V4.76H405.373V8H407.029V10.214Z" fill="#333333"/>
        <path d="M101.285 37.8145H94.4071C94.0025 37.8145 93.5979 38.212 93.3956 38.6095L90.5635 56.1C90.5635 56.4975 90.7658 56.6963 91.1704 56.6963H94.8117C95.2163 56.6963 95.4186 56.4975 95.4186 56.1L96.2278 51.1311C96.2278 50.7336 96.6324 50.3361 97.2393 50.3361H99.4646C104.117 50.3361 106.747 48.1498 107.354 43.7771C107.759 41.9883 107.354 40.3983 106.545 39.4045C105.331 38.4107 103.511 37.8145 101.285 37.8145ZM102.094 44.3734C101.69 46.7585 99.8692 46.7585 98.0485 46.7585H96.8347L97.6439 42.1871C97.6439 41.9883 97.8462 41.7896 98.2508 41.7896H98.6554C99.8692 41.7896 101.083 41.7896 101.69 42.5846C102.094 42.7834 102.094 43.3796 102.094 44.3734Z" fill="#469BDB"/>
        <path d="M51.7218 37.8145H44.8436C44.4391 37.8145 44.0345 38.212 43.8322 38.6095L41 56.1C41 56.4975 41.2023 56.6963 41.6069 56.6963H44.8436C45.2482 56.6963 45.6528 56.2988 45.8551 55.9012L46.6643 51.1311C46.6643 50.7336 47.0689 50.3361 47.6758 50.3361H49.9011C54.5539 50.3361 57.1838 48.1498 57.7907 43.7771C58.1953 41.9883 57.7907 40.3983 56.9815 39.4045C55.7677 38.4107 54.1493 37.8145 51.7218 37.8145ZM52.531 44.3734C52.1264 46.7585 50.3057 46.7585 48.485 46.7585H47.4735L48.2827 42.1871C48.2827 41.9883 48.485 41.7896 48.8896 41.7896H49.2942C50.508 41.7896 51.7218 41.7896 52.3287 42.5846C52.531 42.7834 52.7332 43.3796 52.531 44.3734Z" fill="#283B82"/>
        <path d="M72.5581 44.1749H69.3214C69.1191 44.1749 68.7145 44.3736 68.7145 44.5724L68.5122 45.5661L68.3099 45.1686C67.5007 44.1749 66.0846 43.7773 64.4662 43.7773C60.8249 43.7773 57.5881 46.5599 56.9812 50.3363C56.5766 52.3239 57.1835 54.1127 58.195 55.3052C59.2065 56.4977 60.6226 56.8952 62.4433 56.8952C65.4777 56.8952 67.0961 55.1064 67.0961 55.1064L66.8938 56.1002C66.8938 56.4977 67.0961 56.6965 67.5007 56.6965H70.5351C70.9397 56.6965 71.3443 56.299 71.5466 55.9015L73.3673 44.7711C73.165 44.5724 72.7604 44.1749 72.5581 44.1749ZM67.9053 50.535C67.5007 52.3238 66.0846 53.7151 64.0616 53.7151C63.0501 53.7151 62.241 53.3176 61.8364 52.9201C61.4318 52.3238 61.2295 51.5288 61.2295 50.535C61.4318 48.7462 63.0501 47.355 64.8708 47.355C65.8823 47.355 66.4892 47.7525 67.0961 48.15C67.703 48.7462 67.9053 49.74 67.9053 50.535Z" fill="#283B82"/>
        <path d="M121.918 44.1749H118.682C118.479 44.1749 118.075 44.3736 118.075 44.5724L117.873 45.5661L117.67 45.1686C116.861 44.1749 115.445 43.7773 113.827 43.7773C110.185 43.7773 106.948 46.5599 106.342 50.3363C105.937 52.3239 106.544 54.1127 107.555 55.3052C108.567 56.4977 109.983 56.8952 111.804 56.8952C114.838 56.8952 116.456 55.1064 116.456 55.1064L116.254 56.1002C116.254 56.4977 116.456 56.6965 116.861 56.6965H119.896C120.3 56.6965 120.705 56.299 120.907 55.9015L122.728 44.7711C122.525 44.5724 122.323 44.1749 121.918 44.1749ZM117.266 50.535C116.861 52.3238 115.445 53.7151 113.422 53.7151C112.41 53.7151 111.601 53.3176 111.197 52.9201C110.792 52.3238 110.59 51.5288 110.59 50.535C110.792 48.7462 112.41 47.355 114.231 47.355C115.243 47.355 115.85 47.7525 116.456 48.15C117.266 48.7462 117.468 49.74 117.266 50.535Z" fill="#469BDB"/>
        <path d="M90.158 44.1758H86.7189C86.3143 44.1758 86.112 44.3745 85.9097 44.5733L81.4592 51.331L79.4362 44.9708C79.2339 44.5733 79.0316 44.3745 78.4247 44.3745H75.1879C74.7834 44.3745 74.5811 44.7721 74.5811 45.1696L78.2224 55.7036L74.7833 60.4738C74.5811 60.8713 74.7834 61.4676 75.1879 61.4676H78.4247C78.8293 61.4676 79.0316 61.2688 79.2339 61.07L90.3602 45.3683C90.9671 44.7721 90.5625 44.1758 90.158 44.1758Z" fill="#283B82"/>
        <path d="M125.764 38.411L122.932 56.2991C122.932 56.6966 123.134 56.8953 123.539 56.8953H126.371C126.775 56.8953 127.18 56.4978 127.382 56.1003L130.214 38.6098C130.214 38.2123 130.012 38.0135 129.607 38.0135H126.371C126.168 37.8148 125.966 38.0135 125.764 38.411Z" fill="#469BDB"/>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M181.965 58.5413L188.125 38.2308H193.621L187.461 58.5413H181.965ZM179.508 38.2364L174.564 46.846C173.305 49.1009 172.57 50.2399 172.216 51.6648H172.141C172.228 49.8584 171.976 47.6407 171.952 46.3873L171.406 38.2364H162.155L162.06 38.7827C164.436 38.7827 165.846 39.9767 166.234 42.419L168.037 58.5413H173.731L185.244 38.2364H179.508ZM222.249 58.5413L222.098 55.5206L215.235 55.5151L213.831 58.5409H207.864L218.684 38.2693H226.008L227.84 58.5409H222.249V58.5413ZM221.619 46.5608C221.558 45.0597 221.507 43.0223 221.609 41.7895H221.528C221.194 42.7977 219.757 45.8255 219.125 47.3147L217.08 51.7666H221.899L221.619 46.5608ZM199.391 59.1185C195.51 59.1185 192.935 57.8876 191.097 56.7903L193.715 52.7919C195.365 53.7149 196.661 54.7802 199.643 54.7802C200.601 54.7802 201.525 54.531 202.05 53.6226C202.814 52.3015 201.874 51.5908 199.726 50.3754L198.666 49.686C195.484 47.5112 194.107 45.4456 195.605 41.8398C196.564 39.5334 199.093 37.7852 203.264 37.7852C206.141 37.7852 208.838 39.0295 210.409 40.2453L207.399 43.7754C205.866 42.5351 204.595 41.9075 203.14 41.9075C201.98 41.9075 201.099 42.3548 200.795 42.9581C200.222 44.0923 200.98 44.8656 202.652 45.904L203.913 46.7058C207.777 49.1429 208.698 51.6985 207.729 54.0877C206.064 58.2002 202.803 59.1185 199.391 59.1185Z" fill="#1D5B99"/>
        <path d="M292.643 50.0851C292.643 58.847 285.448 66.0003 276.444 66.0003C267.526 66.0003 260.245 58.847 260.245 50.0851C260.245 41.3233 267.44 34.1699 276.358 34.1699C285.448 34.1699 292.643 41.3233 292.643 50.0851Z" fill="#EA192A"/>
        <path d="M314.484 49.9999C314.484 58.804 307.246 65.9997 298.199 65.9997C289.238 65.9997 281.914 58.804 281.914 49.9999C281.914 41.1957 289.152 34 298.113 34C307.246 34 314.484 41.1957 314.484 49.9999Z" fill="#F9B532"/>
        <path d="M292.685 50.0851C292.685 48.8999 292.513 47.7994 292.341 46.6989H282.346C282.432 46.1063 282.604 45.5984 282.777 45.0058H291.738C291.565 44.4132 291.307 43.8206 291.048 43.3127H283.466C283.724 42.7201 284.069 42.2122 284.414 41.6196H290.187C289.842 41.027 289.411 40.4344 288.894 39.9265H285.706C286.223 39.3339 286.74 38.826 287.343 38.318C284.575 35.7678 280.827 34.2546 276.734 34.1699V65.9897C280.859 65.9262 284.554 64.339 287.429 61.8416C288.033 61.3337 288.55 60.7411 289.067 60.1485H285.706C285.275 59.6406 284.845 59.048 284.5 58.5401H290.273C290.618 58.0321 290.962 57.4396 291.221 56.847H283.552C283.294 56.339 283.035 55.7464 282.863 55.1539H291.824C292.341 53.556 292.685 51.8629 292.685 50.0851Z" fill="#EA192A"/>
        <path d="M282.259 54.0629L282.517 52.6238C282.431 52.6238 282.259 52.7085 282.086 52.7085C281.483 52.7085 281.397 52.3698 281.483 52.2005L282 49.2376H282.948L283.206 47.6291H282.345L282.517 46.6133H280.794C280.794 46.6133 279.76 52.2005 279.76 52.8778C279.76 53.8936 280.363 54.3169 281.138 54.3169C281.655 54.3169 282.086 54.1476 282.259 54.0629Z" fill="white"/>
        <path d="M282.86 51.3534C282.86 53.7238 284.497 54.3163 285.876 54.3163C287.169 54.3163 287.686 54.0624 287.686 54.0624L288.03 52.4539C288.03 52.4539 287.082 52.8772 286.221 52.8772C284.325 52.8772 284.67 51.5227 284.67 51.5227H288.203C288.203 51.5227 288.461 50.4222 288.461 49.9989C288.461 48.8984 287.858 47.5439 285.962 47.5439C284.153 47.3746 282.86 49.237 282.86 51.3534ZM285.876 48.8984C286.824 48.8984 286.652 49.9989 286.652 50.0836H284.756C284.756 49.9989 284.928 48.8984 285.876 48.8984Z" fill="white"/>
        <path d="M296.817 54.0631L297.162 52.2007C297.162 52.2007 296.3 52.624 295.697 52.624C294.491 52.624 293.974 51.6928 293.974 50.6769C293.974 48.6452 295.008 47.5447 296.214 47.5447C297.076 47.5447 297.765 48.0526 297.765 48.0526L298.023 46.2748C298.023 46.2748 296.989 45.8516 296.042 45.8516C294.06 45.8516 292.078 47.5447 292.078 50.7616C292.078 52.878 293.112 54.3171 295.18 54.3171C295.869 54.3171 296.817 54.0631 296.817 54.0631Z" fill="white"/>
        <path d="M272.778 47.377C271.572 47.377 270.71 47.7156 270.71 47.7156L270.452 49.1547C270.452 49.1547 271.227 48.8161 272.347 48.8161C272.95 48.8161 273.467 48.9007 273.467 49.4087C273.467 49.7473 273.381 49.832 273.381 49.832C273.381 49.832 272.864 49.832 272.606 49.832C271.141 49.832 269.504 50.4245 269.504 52.3716C269.504 53.8954 270.538 54.234 271.141 54.234C272.347 54.234 272.864 53.4721 272.95 53.4721L272.864 54.1494H274.415L275.105 49.4933C275.105 47.4616 273.381 47.377 272.778 47.377ZM273.123 51.1864C273.123 51.4404 272.95 52.7949 271.916 52.7949C271.4 52.7949 271.227 52.3716 271.227 52.1177C271.227 51.6944 271.486 51.1018 272.778 51.1018C273.037 51.1864 273.123 51.1864 273.123 51.1864Z" fill="white"/>
        <path d="M276.742 54.2328C277.172 54.2328 279.326 54.3174 279.326 52.0317C279.326 49.9153 277.259 50.3386 277.259 49.4921C277.259 49.0688 277.603 48.8995 278.206 48.8995C278.465 48.8995 279.413 48.9841 279.413 48.9841L279.671 47.4603C279.671 47.4603 279.068 47.291 278.034 47.291C276.742 47.291 275.449 47.7989 275.449 49.4921C275.449 51.4391 277.603 51.2698 277.603 52.0317C277.603 52.5396 277 52.6243 276.569 52.6243C275.794 52.6243 275.018 52.3703 275.018 52.3703L274.76 53.8941C274.846 54.0634 275.277 54.2328 276.742 54.2328Z" fill="white"/>
        <path d="M311.12 46.0215L310.776 48.3072C310.776 48.3072 310.086 47.4606 309.139 47.4606C307.588 47.4606 306.209 49.323 306.209 51.5241C306.209 52.8786 306.898 54.3177 308.363 54.3177C309.397 54.3177 310 53.6405 310 53.6405L309.914 54.233H311.637L312.93 46.1061L311.12 46.0215ZM310.345 50.5082C310.345 51.4394 309.914 52.6246 308.966 52.6246C308.363 52.6246 308.018 52.1167 308.018 51.2701C308.018 49.9156 308.622 49.0691 309.397 49.0691C310 49.0691 310.345 49.4924 310.345 50.5082Z" fill="white"/>
        <path d="M263.387 54.1484L264.421 48.0532L264.593 54.1484H265.8L268.04 48.0532L267.092 54.1484H268.902L270.28 46.0215H267.437L265.714 51.0161L265.627 46.0215H263.129L261.75 54.1484H263.387Z" fill="white"/>
        <path d="M290.1 54.1461C290.617 51.3525 290.703 49.0668 291.909 49.49C292.081 48.3895 292.34 47.9662 292.512 47.543C292.512 47.543 292.426 47.543 292.168 47.543C291.392 47.543 290.789 48.5588 290.789 48.5588L290.961 47.6276H289.324L288.204 54.2307H290.1V54.1461Z" fill="white"/>
        <path d="M300.784 47.377C299.578 47.377 298.716 47.7156 298.716 47.7156L298.458 49.1547C298.458 49.1547 299.233 48.8161 300.353 48.8161C300.956 48.8161 301.473 48.9007 301.473 49.4087C301.473 49.7473 301.387 49.832 301.387 49.832C301.387 49.832 300.87 49.832 300.612 49.832C299.147 49.832 297.51 50.4245 297.51 52.3716C297.51 53.8954 298.544 54.234 299.147 54.234C300.353 54.234 300.87 53.4721 300.956 53.4721L300.87 54.1494H302.421L303.11 49.4933C303.197 47.4616 301.387 47.377 300.784 47.377ZM301.215 51.1864C301.215 51.4404 301.042 52.7949 300.009 52.7949C299.492 52.7949 299.319 52.3716 299.319 52.1177C299.319 51.6944 299.578 51.1018 300.87 51.1018C301.129 51.1864 301.129 51.1864 301.215 51.1864Z" fill="white"/>
        <path d="M304.573 54.1461C305.09 51.3525 305.176 49.0668 306.383 49.49C306.555 48.3895 306.814 47.9662 306.986 47.543C306.986 47.543 306.9 47.543 306.641 47.543C305.866 47.543 305.263 48.5588 305.263 48.5588L305.435 47.6276H303.798L302.678 54.2307H304.573V54.1461Z" fill="white"/>
        <path d="M383.676 50.7393C387 50.7393 389.694 48.0922 389.694 44.8267C389.694 41.5612 387 38.9141 383.676 38.9141C380.353 38.9141 377.658 41.5612 377.658 44.8267C377.658 48.0922 380.353 50.7393 383.676 50.7393Z" fill="#F5821E"/>
        <path d="M348.842 39.2559H345.602V50.3989H348.842C350.578 50.3989 351.851 49.9441 352.893 49.1482C354.166 48.1248 354.976 46.533 354.976 44.8274C354.976 41.53 352.545 39.2559 348.842 39.2559ZM351.504 47.67C350.809 48.2385 349.884 48.5796 348.495 48.5796H347.8V41.1888H348.379C349.768 41.1888 350.694 41.4162 351.388 42.0985C352.198 42.7807 352.661 43.804 352.661 44.8274C352.777 45.8507 352.314 46.9878 351.504 47.67Z" fill="#141414"/>
        <path d="M358.216 39.2559H356.018V50.3989H358.216V39.2559Z" fill="#141414"/>
        <path d="M363.771 43.5771C362.382 43.1222 362.035 42.7811 362.035 42.2126C362.035 41.5304 362.729 40.9619 363.655 40.9619C364.349 40.9619 364.928 41.1893 365.507 41.8715L366.664 40.3933C365.738 39.5974 364.581 39.1426 363.308 39.1426C361.34 39.1426 359.72 40.507 359.72 42.3263C359.72 43.9182 360.415 44.6004 362.498 45.3963C363.424 45.7374 363.771 45.8511 364.002 46.0786C364.465 46.306 364.697 46.7608 364.697 47.2156C364.697 48.1252 364.002 48.8075 362.961 48.8075C361.919 48.8075 360.993 48.2389 360.53 47.3293L359.142 48.6938C360.183 50.1719 361.456 50.8541 363.076 50.8541C365.391 50.8541 367.011 49.376 367.011 47.2156C367.011 45.2826 366.317 44.4867 363.771 43.5771Z" fill="#141414"/>
        <path d="M367.705 44.8271C367.705 48.1246 370.367 50.6261 373.723 50.6261C374.649 50.6261 375.459 50.3986 376.501 49.9438V47.3286C375.575 48.2383 374.765 48.5794 373.839 48.5794C371.64 48.5794 370.02 46.9875 370.02 44.7134C370.02 42.553 371.64 40.8475 373.723 40.8475C374.765 40.8475 375.575 41.1886 376.501 42.0982V39.483C375.575 39.0282 374.765 38.8008 373.723 38.8008C370.483 39.0282 367.705 41.6434 367.705 44.8271Z" fill="#141414"/>
        <path d="M394.67 46.7604L391.661 39.2559H389.23L393.975 50.74H395.248L400.225 39.2559H397.795L394.67 46.7604Z" fill="#141414"/>
        <path d="M401.155 50.3989H407.52V48.5796H403.47V45.5096H407.405V43.5766H403.47V41.1888H407.52V39.2559H401.155V50.3989Z" fill="#141414"/>
        <path d="M413.765 45.737C415.501 45.3959 416.427 44.2589 416.427 42.5533C416.427 40.5066 414.923 39.2559 412.377 39.2559H409.021V50.3989H411.219V45.9644H411.567L414.691 50.3989H417.353L413.765 45.737ZM411.914 44.3726H411.219V40.9614H411.914C413.303 40.9614 414.113 41.5299 414.113 42.667C414.113 43.804 413.303 44.3726 411.914 44.3726Z" fill="#4D4D4D"/>
        <path d="M413.765 45.737C415.501 45.3959 416.427 44.2589 416.427 42.5533C416.427 40.5066 414.923 39.2559 412.377 39.2559H409.021V50.3989H411.219V45.9644H411.567L414.691 50.3989H417.353L413.765 45.737ZM411.914 44.3726H411.219V40.9614H411.914C413.303 40.9614 414.113 41.5299 414.113 42.667C414.113 43.804 413.303 44.3726 411.914 44.3726Z" fill="#141414"/>
        <path d="M361.919 60.7459V54.4922L366.317 58.9267V54.8333H367.243V61.0871L362.845 56.6526V60.7459H361.919Z" fill="#858585"/>
        <path d="M371.872 55.7436H369.441V57.1081H371.756V58.0177H369.441V59.9507H371.872V60.7466H368.516V54.834H371.872V55.7436Z" fill="#858585"/>
        <path d="M374.764 55.7432V60.7462H373.838V55.7432H372.449V54.9473H376.153V55.7432H374.764Z" fill="#858585"/>
        <path d="M377.541 54.9481L379.046 58.9278L380.666 54.7207L382.17 58.9278L383.791 54.9481H384.948L382.286 61.2019L380.782 56.9948L379.161 61.2019L376.615 54.9481H377.541Z" fill="#858585"/>
        <path d="M385.063 57.7907C385.063 56.9948 385.411 56.1989 385.989 55.6303C386.568 55.0618 387.378 54.7207 388.188 54.7207C388.998 54.7207 389.808 55.0618 390.387 55.6303C390.966 56.1989 391.313 56.9948 391.313 57.7907C391.313 58.5867 390.966 59.3826 390.387 59.9511C389.808 60.5196 388.998 60.8607 388.188 60.8607C387.378 60.8607 386.684 60.6333 386.105 60.0648C385.411 59.4963 385.063 58.8141 385.063 57.7907ZM385.989 57.7907C385.989 58.473 386.221 58.9278 386.684 59.3826C387.147 59.8374 387.61 60.0648 388.188 60.0648C388.767 60.0648 389.346 59.8374 389.808 59.3826C390.271 58.9278 390.503 58.473 390.503 57.7907C390.503 57.1085 390.271 56.6537 389.808 56.1989C389.346 55.744 388.883 55.5166 388.188 55.5166C387.61 55.5166 387.031 55.744 386.568 56.1989C386.221 56.6537 385.989 57.2222 385.989 57.7907Z" fill="#858585"/>
        <path d="M394.554 58.2432L396.406 60.7447H395.248L393.512 58.3569H393.397V60.7447H392.471V54.832H393.512C394.322 54.832 394.901 54.9457 395.248 55.2869C395.595 55.628 395.827 56.0828 395.827 56.5376C395.827 56.9924 395.711 57.3335 395.48 57.5609C395.248 58.0158 394.901 58.2432 394.554 58.2432ZM393.397 57.5609H393.628C394.438 57.5609 394.901 57.2198 394.901 56.6513C394.901 56.0828 394.438 55.7417 393.628 55.7417H393.281V57.5609H393.397Z" fill="#858585"/>
        <path d="M398.141 57.2222L400.456 54.8344H401.613L398.951 57.4496L401.613 60.6333H400.456L398.257 58.0181L398.025 58.2455V60.6333H397.1V54.7207H398.025V57.2222H398.141Z" fill="#858585"/>
        <path d="M454.766 42.7036H457.71L456.238 39.0215L454.766 42.7036Z" fill="#017AAB"/>
        <path d="M519.951 35.6016V37.1796L519.148 35.6016H512.857V37.1796L512.054 35.6016H503.488C502.016 35.6016 500.811 35.8646 499.74 36.3906V35.6016H493.717V36.3906C493.048 35.8646 492.245 35.6016 491.174 35.6016H469.624L468.152 38.8892L466.679 35.6016H459.853V37.1796L459.05 35.6016H453.295L450.618 41.7823L447.539 48.6206H450.618H454.365L455.168 46.5165H457.042L457.845 48.6206H465.609V47.0426L466.278 48.6206H470.16L470.829 47.0426V48.6206H489.434V45.2015H489.701C489.969 45.2015 489.969 45.2015 489.969 45.596V48.4891H499.606V47.7001C500.409 48.0946 501.614 48.4891 503.22 48.4891H507.236L508.039 46.385H509.913L510.716 48.4891H518.479V46.5165L519.684 48.4891H525.974V35.6016H519.951ZM474.71 46.648H472.435V39.4152L469.223 46.648H467.215L464.002 39.4152V46.648H459.452L458.515 44.6755H453.964L453.161 46.7795H450.618L454.633 37.4426H457.979L461.727 46.2535V37.4426H465.341L468.286 43.7549L470.963 37.4426H474.71V46.648ZM483.812 39.4152H478.592V41.1248H483.678V42.9659H478.592V44.807H483.812V46.7795H476.317V37.4426H483.812V39.4152ZM493.851 43.2289C494.118 43.7549 494.252 44.1494 494.252 44.9385V46.7795H491.977V45.596C491.977 45.07 491.977 44.2809 491.575 43.7549C491.174 43.3604 490.772 43.3604 489.969 43.3604H487.56V46.7795H485.284V37.4426H490.371C491.575 37.4426 492.378 37.4426 493.048 37.8372C493.717 38.2317 494.118 38.8892 494.118 39.9413C494.118 41.3878 493.181 42.1768 492.512 42.4399C493.181 42.5714 493.583 42.9659 493.851 43.2289ZM497.866 46.648H495.591V37.3111H497.866V46.648ZM524.234 46.648H521.022L516.739 39.6782V46.648H512.188L511.385 44.6755H506.7L505.897 46.7795H503.354C502.283 46.7795 500.945 46.5165 500.142 45.7275C499.339 44.9385 498.937 43.8864 498.937 42.1768C498.937 40.8618 499.205 39.5467 500.142 38.4947C500.811 37.7057 502.016 37.4426 503.488 37.4426H505.629V39.4152H503.488C502.685 39.4152 502.283 39.5467 501.748 39.9413C501.346 40.3358 501.079 41.1248 501.079 42.0453C501.079 43.0974 501.212 43.7549 501.748 44.2809C502.149 44.6755 502.685 44.807 503.354 44.807H504.291L507.369 37.5741H510.716L514.463 46.385V37.5741H517.81L521.691 44.0179V37.5741H523.967V46.648H524.234Z" fill="#017AAB"/>
        <path d="M507.503 42.7036H510.581L509.109 39.0215L507.503 42.7036Z" fill="#017AAB"/>
        <path d="M484.749 61.6404V54.1445L481.269 57.8267L484.749 61.6404Z" fill="#017AAB"/>
        <path d="M470.426 55.0645V56.774H475.378V58.6151H470.426V60.5877H475.914L478.457 57.8261L476.047 55.0645H470.426Z" fill="#017AAB"/>
        <path d="M489.837 55.0645H487.026V57.4316H489.971C490.774 57.4316 491.31 57.037 491.31 56.248C491.176 55.459 490.64 55.0645 489.837 55.0645Z" fill="#017AAB"/>
        <path d="M531.194 57.3025V51.3848H529.588H525.572C524.368 51.3848 523.431 51.6478 522.762 52.1738V51.3848H516.605C515.668 51.3848 514.463 51.6478 513.928 52.1738V51.3848H503.086V52.1738C502.283 51.5163 500.81 51.3848 500.141 51.3848H492.913V52.1738C492.244 51.5163 490.638 51.3848 489.835 51.3848H481.804L479.93 53.3573L478.19 51.3848H466.144V64.2723H477.922L479.796 62.2997L481.536 64.2723H488.764V61.2477H489.701C490.638 61.2477 491.843 61.2477 492.779 60.8532V64.4038H498.803V60.9847H499.07C499.472 60.9847 499.472 60.9847 499.472 61.3792V64.4038H517.675C518.88 64.4038 520.085 64.1408 520.754 63.6148V64.4038H526.509C527.714 64.4038 528.919 64.2723 529.722 63.7463C531.06 62.9573 531.863 61.5107 531.863 59.8011C531.863 58.8806 531.596 57.96 531.194 57.3025ZM489.701 59.4066H487.024V62.5627H482.741L480.064 59.5381L477.253 62.5627H468.419V53.2258H477.387L480.064 56.2505L482.875 53.2258H489.969C491.709 53.2258 493.716 53.7519 493.716 56.2505C493.583 58.8806 491.709 59.4066 489.701 59.4066ZM503.086 58.8806C503.354 59.2751 503.487 59.8011 503.487 60.5902V62.4312H501.212V61.2477C501.212 60.7217 501.212 59.8011 500.81 59.4066C500.543 59.0121 500.007 59.0121 499.204 59.0121H496.795V62.4312H494.52V53.0943H499.606C500.677 53.0943 501.613 53.0943 502.283 53.4889C502.952 53.8834 503.487 54.5409 503.487 55.5929C503.487 57.0395 502.55 57.8285 501.881 58.0916C502.55 58.3546 502.952 58.6176 503.086 58.8806ZM512.321 55.0669H507.101V56.7765H512.188V58.6176H507.101V60.4587H512.321V62.4312H504.826V53.0943H512.321V55.0669ZM517.943 62.4312H513.66V60.4587H517.943C518.345 60.4587 518.612 60.4587 518.88 60.1956C519.014 60.0641 519.148 59.8011 519.148 59.5381C519.148 59.2751 519.014 59.0121 518.88 58.8806C518.746 58.7491 518.478 58.6176 518.077 58.6176C515.935 58.4861 513.392 58.6176 513.392 55.7245C513.392 54.4094 514.195 52.9628 516.605 52.9628H521.022V55.1984H516.872C516.471 55.1984 516.203 55.1984 515.935 55.3299C515.668 55.4614 515.668 55.7245 515.668 55.9875C515.668 56.382 515.935 56.5135 516.203 56.645C516.471 56.7765 516.738 56.7765 517.006 56.7765H518.211C519.415 56.7765 520.218 57.0395 520.754 57.5655C521.155 57.96 521.423 58.6176 521.423 59.5381C521.423 61.5107 520.218 62.4312 517.943 62.4312ZM529.454 61.5107C528.919 62.0367 527.982 62.4312 526.643 62.4312H522.36V60.4587H526.643C527.045 60.4587 527.312 60.4587 527.58 60.1956C527.714 60.0641 527.848 59.8011 527.848 59.5381C527.848 59.2751 527.714 59.0121 527.58 58.8806C527.446 58.7491 527.179 58.6176 526.777 58.6176C524.635 58.4861 522.092 58.6176 522.092 55.7245C522.092 54.4094 522.895 52.9628 525.305 52.9628H529.722V55.1984H525.706C525.305 55.1984 525.037 55.1984 524.769 55.3299C524.502 55.4614 524.502 55.7245 524.502 55.9875C524.502 56.382 524.635 56.5135 525.037 56.645C525.305 56.7765 525.572 56.7765 525.84 56.7765H527.045C528.249 56.7765 529.052 57.0395 529.588 57.5655C529.722 57.5655 529.722 57.697 529.722 57.697C530.123 58.2231 530.257 58.8806 530.257 59.5381C530.257 60.3272 529.989 60.9847 529.454 61.5107Z" fill="#017AAB"/>
        <path d="M484.748 61.6384V54.1426L481.268 57.8247L484.748 61.6384Z" fill="#017AAB"/>
        <path d="M519.682 48.0957L519.949 48.4902H520.083L519.682 48.0957Z" fill="#228FE0"/>
        <path d="M499.59 55.0645H496.779V57.4316H499.724C500.527 57.4316 501.062 57.037 501.062 56.248C500.929 55.459 500.393 55.0645 499.59 55.0645Z" fill="#017AAB"/>
        <path d="M490.371 39.1855H487.561V41.5526H490.505C491.308 41.5526 491.844 41.1581 491.844 40.3691C491.71 39.5801 491.174 39.1855 490.371 39.1855Z" fill="#017AAB"/>
        </svg>

                                    </div>
                                </div>
                                <div class="pt-collapse-block">
                                    <div class="pt-item">
                                        <div class="pt-collapse-title">
                                            Description
                                            <span class="pt-icon">
                                                <svg>
                                                    <use xlink:href="#icon-arrow_small_bottom"></use>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="pt-collapse-content">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                            <ul class="pt-list-dot">
                                                <li>
                                                    Omnis iste natus error sit voluptatem
                                                </li>
                                                <li>Accusantium doloremque</li>
                                                <li>Laudantium, totam rem aperiam,</li>
                                                <li>Eaque ipsa quae ab illo inventore veritatis</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pt-item">
                                        <div class="pt-collapse-title">
                                            Additional information
                                            <span class="pt-icon">
                                                <svg>
                                                    <use xlink:href="#icon-arrow_small_bottom"></use>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="pt-collapse-content">
                                            <div class="pt-table-03-indent">
                                                <table class="pt-table-03">
                                                    <tbody>
                                                        <tr>
                                                            <td>Color:</td>
                                                            <td>Blue, Purple, White</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Size:</td>
                                                            <td>20, 24</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Material:</td>
                                                            <td>100% Polyester</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pt-item">
                                        <div class="pt-collapse-title">
                                            Reviews
                                            <span class="pt-icon">
                                                <svg>
                                                    <use xlink:href="#icon-arrow_small_bottom"></use>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="pt-collapse-content">
                                            <div class="pt-review-block">
                                                <div class="pt-review-title">
                                                    <div class="col-item">
                                                        <h6 class="pt-title">
                                                            Customer Reviews
                                                        </h6>
                                                        <div class="pt-title-description">
                                                            <div class="pt-rating">
                                                                <i class="pt-star"><svg><use xlink:href="#icon-review"></use></svg></i>
                                                                <i class="pt-star"><svg><use xlink:href="#icon-review"></use></svg></i>
                                                                <i class="pt-star"><svg><use xlink:href="#icon-review"></use></svg></i>
                                                                <i class="pt-star"><svg><use xlink:href="#icon-review"></use></svg></i>
                                                                <i><svg><use xlink:href="#icon-review"></use></svg></i>
                                                            </div>
                                                            <span class="pt-text">Based on 2 reviews</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-item">
                                                        <a href="#" class="btn btn-border">Write a reviews</a>
                                                    </div>
                                                </div>
                                                <div class="pt-review-comments">
                                                    <div class="pt-item">
                                                        <div class="comments-wrapper">
                                                            <div class="pt-rating">
                                                                <i class="pt-star"><svg><use xlink:href="#icon-review"></use></svg></i>
                                                                <i class="pt-star"><svg><use xlink:href="#icon-review"></use></svg></i>
                                                                <i class="pt-star"><svg><use xlink:href="#icon-review"></use></svg></i>
                                                                <i class="pt-star"><svg><use xlink:href="#icon-review"></use></svg></i>
                                                                <i><svg><use xlink:href="#icon-review"></use></svg></i>
                                                            </div>
                                                            <h6 class="pt-comments-title">
                                                                NICE WORK!!!
                                                            </h6>
                                                            <div class="pt-comments-info">
                                                                <strong>Admin</strong> on <strong>Sep 21, 2018</strong>
                                                            </div>
                                                            <div class="pt-comments-layout">
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                                                            </div>
                                                        </div>
                                                        <div class="pt-review-link">
                                                            <a href="#" target="_blank">Report as Inappropriate</a>
                                                        </div>
                                                    </div>
                                                    <div class="pt-item">
                                                        <div class="comments-wrapper">
                                                            <div class="pt-rating">
                                                                <i class="pt-star"><svg><use xlink:href="#icon-review"></use></svg></i>
                                                                <i class="pt-star"><svg><use xlink:href="#icon-review"></use></svg></i>
                                                                <i class="pt-star"><svg><use xlink:href="#icon-review"></use></svg></i>
                                                                <i class="pt-star"><svg><use xlink:href="#icon-review"></use></svg></i>
                                                                <i><svg><use xlink:href="#icon-review"></use></svg></i>
                                                            </div>
                                                            <h6 class="pt-comments-title">
                                                                Good!
                                                            </h6>
                                                            <div class="pt-comments-info">
                                                                <strong>Admin</strong> on <strong>Sep 21, 2018</strong>
                                                            </div>
                                                            <div class="pt-comments-layout">
                                                                Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                            </div>
                                                        </div>
                                                        <div class="pt-review-link">
                                                            <a href="#" target="_blank">Report as Inappropriate</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pt-review-form">
                                                    <div class="pt-message-info">
                                                        Write a Review
                                                    </div>
                                                    <form class="form-default">
                                                        <div class="form-group">
                                                            <label for="inputName" class="control-label">Name</label>
                                                            <input type="email" class="form-control" id="inputName" placeholder="Enter your name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputEmail" class="control-label">Email address</label>
                                                            <input type="password" class="form-control" id="inputEmail" placeholder="john.smith@example.com">
                                                        </div>
                                                        <div class="pt-rating-indicator">
                                                            <div class="pt-title">
                                                                Rating
                                                            </div>
                                                            <div class="pt-rating">
                                                                <i class="pt-star"><svg><use xlink:href="#icon-review"></use></svg></i>
                                                                <i class="pt-star"><svg><use xlink:href="#icon-review"></use></svg></i>
                                                                <i class="pt-star"><svg><use xlink:href="#icon-review"></use></svg></i>
                                                                <i class="pt-star"><svg><use xlink:href="#icon-review"></use></svg></i>
                                                                <i><svg><use xlink:href="#icon-review"></use></svg></i>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputTitle" class="control-label">Review Title</label>
                                                            <input type="text" class="form-control" id="inputTitle" placeholder="Give your review a title">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="textarea" class="control-label">Body of Review (1500)</label>
                                                            <textarea class="form-control" id="textarea" placeholder="Write your comments here" rows="8"></textarea>
                                                        </div>
                                                        <button type="submit" class="btn">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-wrapper">
                                    <!-- Go to www.addthis.com/dashboard to customize your tools -->
                                    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5cb03aae6a4f75e3"></script>
                                    <!-- Go to www.addthis.com/dashboard to customize your tools -->
                                    <div class="addthis_inline_share_toolbox"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-indent">
            <div class="container container-fluid-custom-mobile-padding">
                <div class="pt-block-title">
                    <h4 class="pt-title">Related Products</h4>
                </div>
                <div class="js-init-carousel js-align-arrow row arrow-location-center-02 pt-layout-product-item">
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="pt-product">
                            <div class="pt-image-box">
                                <div class="pt-app-btn">
                                    <a href="#" class="pt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left">
                                        <svg><use xlink:href="#icon-wishlist"></use></svg>
                                        <svg><use xlink:href="#icon-wishlist-add"></use></svg>
                                    </a>
                                    <a href="#" class="pt-btn-compare" data-tooltip="Add to Compare" data-tposition="left">
                                        <svg><use xlink:href="#icon-compare"></use></svg>
                                        <svg><use xlink:href="#icon-compare-add"></use></svg>
                                    </a>
                                    <a href="#" class="pt-btn-quickview" data-toggle="modal" data-target="#ModalquickView" data-tooltip="Quick View" data-tposition="left">
                                        <svg><use xlink:href="#icon-quick_view"></use></svg>
                                    </a>
                                </div>
                                <a href="product-type-03.html">
                                    <span class="pt-img">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAArwAAAOCAQMAAACvc5NpAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAHBJREFUeNrswYEAAAAAgKD9qRepAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADg9uCABAAAAEDQ/9f9CBUAAAAAAAAAAAAAAAAAAAAAAGAiOEEAAVstZ/kAAAAASUVORK5CYII=" class="lazyload" data-src="images/product/product-04.jpg" alt="image">
                                    </span>
                                    <span class="pt-img-roll-over">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAArwAAAOCAQMAAACvc5NpAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAHBJREFUeNrswYEAAAAAgKD9qRepAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADg9uCABAAAAEDQ/9f9CBUAAAAAAAAAAAAAAAAAAAAAAGAiOEEAAVstZ/kAAAAASUVORK5CYII=" class="lazyload" data-src="images/product/product-04-02.jpg" alt="image">
                                    </span>
                                    <span class="pt-label-location">
                                        <span class="pt-label-new">NEW</span>
                                    </span>
                                </a>
                            </div>
                            <div class="pt-description">
                                <div class="pt-col">
                                    <div class="pt-rating">
                                        <i class="pt-star">
                                            <svg>
                                                <use xlink:href="#icon-review"></use>
                                            </svg>
                                        </i>
                                        <i class="pt-star">
                                            <svg>
                                                <use xlink:href="#icon-review"></use>
                                            </svg>
                                        </i>
                                        <i class="pt-star">
                                            <svg>
                                                <use xlink:href="#icon-review"></use>
                                            </svg>
                                        </i>
                                        <i class="pt-star">
                                            <svg>
                                                <use xlink:href="#icon-review"></use>
                                            </svg>
                                        </i>
                                        <i>
                                            <svg>
                                                <use xlink:href="#icon-review"></use>
                                            </svg>
                                        </i>
                                        <span class="pt-total">(2)</span>
                                    </div>
                                    <ul class="pt-add-info">
                                        <li><a href="#">WOMEN???S</a></li>
                                    </ul>
                                    <h2 class="pt-title"><a href="product-type-03.html">Midi button-up denim skirt</a></h2>
                                    <div class="pt-price">
                                        $34.89
                                    </div>
                                    <div class="pt-option-block">
                                        <ul class="pt-options-swatch">
                                            <li class="active">
                                                <a href="#">XS</a>
                                            </li>
                                            <li><a href="#">S</a></li>
                                            <li><a href="#">M</a></li>
                                        </ul>
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
                                            <span class="pt-text">ADD TO CART</span>
                                        </a>
                                        <div class="pt-price">
                                            $34.89
                                        </div>
                                        <div class="pt-wrapper-btn">
                                            <a href="#" class="pt-btn-wishlist">
                                                <span class="pt-icon">
                                                    <svg><use xlink:href="#icon-wishlist"></use></svg>
                                                    <svg><use xlink:href="#icon-wishlist-add"></use></svg>
                                                </span>
                                                <span class="pt-text">Add to wishlist</span>
                                            </a>
                                            <a href="#" class="pt-btn-compare">
                                                <span class="pt-icon">
                                                    <svg><use xlink:href="#icon-compare"></use></svg>
                                                    <svg><use xlink:href="#icon-compare-add"></use></svg>
                                                </span>
                                                <span class="pt-text">Add to compare</span>
                                            </a>
                                            <a href="#" class="pt-btn-quickview" data-toggle="modal" data-target="#ModalquickView">
                                                <span class="pt-icon">
                                                    <svg><use xlink:href="#icon-quick_view"></use></svg>
                                                </span>
                                                <span class="pt-text">Zoom</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="pt-product">
                            <div class="pt-image-box">
                                <div class="pt-app-btn">
                                    <a href="#" class="pt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left">
                                        <svg><use xlink:href="#icon-wishlist"></use></svg>
                                        <svg><use xlink:href="#icon-wishlist-add"></use></svg>
                                    </a>
                                    <a href="#" class="pt-btn-compare" data-tooltip="Add to Compare" data-tposition="left">
                                        <svg><use xlink:href="#icon-compare"></use></svg>
                                        <svg><use xlink:href="#icon-compare-add"></use></svg>
                                    </a>
                                    <a href="#" class="pt-btn-quickview" data-toggle="modal" data-target="#ModalquickView" data-tooltip="Quick View" data-tposition="left">
                                        <svg><use xlink:href="#icon-quick_view"></use></svg>
                                    </a>
                                </div>
                                <a href="product-type-03.html">
                                    <span class="pt-img">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAArwAAAOCAQMAAACvc5NpAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAHBJREFUeNrswYEAAAAAgKD9qRepAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADg9uCABAAAAEDQ/9f9CBUAAAAAAAAAAAAAAAAAAAAAAGAiOEEAAVstZ/kAAAAASUVORK5CYII=" class="lazyload" data-src="images/product/product-01.jpg" alt="image">
                                    </span>
                                    <span class="pt-img-roll-over">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAArwAAAOCAQMAAACvc5NpAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAHBJREFUeNrswYEAAAAAgKD9qRepAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADg9uCABAAAAEDQ/9f9CBUAAAAAAAAAAAAAAAAAAAAAAGAiOEEAAVstZ/kAAAAASUVORK5CYII=" class="lazyload" data-src="images/product/product-01-02.jpg" alt="image">
                                    </span>
                                    <span class="pt-label-location">
                                        <span class="pt-label-new">NEW</span>
                                    </span>
                                </a>
                            </div>
                            <div class="pt-description">
                                <div class="pt-col">
                                    <ul class="pt-add-info">
                                        <li><a href="#">WOMEN???S</a></li>
                                    </ul>
                                    <h2 class="pt-title"><a href="product-type-03.html">Push up low rise jeans</a></h2>
                                    <div class="pt-price">
                                        $24
                                    </div>
                                    <div class="pt-option-block">
                                        <ul class="pt-options-swatch js-change-img">
                                            <li class="active"><a href="#" class="options-color-img" data-src="images/product/product-01.jpg"></a></li>
                                            <li>
                                                <a href="#" class="options-color-img" data-src="images/product/product-01-02.jpg"></a>
                                            </li>
                                        </ul>
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
                                            <span class="pt-text">ADD TO CART</span>
                                        </a>
                                        <div class="pt-price">
                                            <span class="old-price">$24</span>
                                            <span class="new-price">$14</span>
                                        </div>
                                        <div class="pt-wrapper-btn">
                                            <a href="#" class="pt-btn-wishlist">
                                                <span class="pt-icon">
                                                    <svg><use xlink:href="#icon-wishlist"></use></svg>
                                                    <svg><use xlink:href="#icon-wishlist-add"></use></svg>
                                                </span>
                                                <span class="pt-text">Add to wishlist</span>
                                            </a>
                                            <a href="#" class="pt-btn-compare">
                                                <span class="pt-icon">
                                                    <svg><use xlink:href="#icon-compare"></use></svg>
                                                    <svg><use xlink:href="#icon-compare-add"></use></svg>
                                                </span>
                                                <span class="pt-text">Add to compare</span>
                                            </a>
                                            <a href="#" class="pt-btn-quickview" data-toggle="modal" data-target="#ModalquickView">
                                                <span class="pt-icon">
                                                    <svg><use xlink:href="#icon-quick_view"></use></svg>
                                                </span>
                                                <span class="pt-text">Zoom</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="pt-product">
                            <div class="pt-image-box">
                                <div class="pt-app-btn">
                                    <a href="#" class="pt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left">
                                        <svg><use xlink:href="#icon-wishlist"></use></svg>
                                        <svg><use xlink:href="#icon-wishlist-add"></use></svg>
                                    </a>
                                    <a href="#" class="pt-btn-compare" data-tooltip="Add to Compare" data-tposition="left">
                                        <svg><use xlink:href="#icon-compare"></use></svg>
                                        <svg><use xlink:href="#icon-compare-add"></use></svg>
                                    </a>
                                    <a href="#" class="pt-btn-quickview" data-toggle="modal" data-target="#ModalquickView" data-tooltip="Quick View" data-tposition="left">
                                        <svg><use xlink:href="#icon-quick_view"></use></svg>
                                    </a>
                                </div>
                                <a href="product-type-03.html">
                                    <span class="pt-img">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAArwAAAOCAQMAAACvc5NpAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAHBJREFUeNrswYEAAAAAgKD9qRepAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADg9uCABAAAAEDQ/9f9CBUAAAAAAAAAAAAAAAAAAAAAAGAiOEEAAVstZ/kAAAAASUVORK5CYII=" class="lazyload" data-src="images/product/product-02.jpg" alt="image">
                                    </span>
                                    <span class="pt-img-roll-over">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAArwAAAOCAQMAAACvc5NpAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAHBJREFUeNrswYEAAAAAgKD9qRepAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADg9uCABAAAAEDQ/9f9CBUAAAAAAAAAAAAAAAAAAAAAAGAiOEEAAVstZ/kAAAAASUVORK5CYII=" class="lazyload" data-src="images/product/product-02-02.jpg" alt="image">
                                    </span>
                                    <span class="pt-label-location">
                                        <span class="pt-label-sale">SALE -27%</span>
                                    </span>
                                </a>
                            </div>
                            <div class="pt-description">
                                <div class="pt-col">
                                    <ul class="pt-add-info">
                                        <li><a href="#">WOMEN???S</a></li>
                                    </ul>
                                    <h2 class="pt-title"><a href="product-type-03.html">Printed dress</a></h2>
                                    <div class="pt-price">
                                        $24
                                    </div>
                                    <div class="pt-option-block">
                                        <!-- simle color -->
                                        <ul class="pt-options-swatch">
                                            <li class="active"><a class="options-color pt-color-bg-12" href="#"></a></li>
                                            <li><a class="options-color pt-color-bg-02" href="#"></a></li>
                                            <li><a class="options-color pt-color-bg-13" href="#"></a></li>
                                        </ul>
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
                                            <span class="pt-text">ADD TO CART</span>
                                        </a>
                                        <div class="pt-price">
                                            <span class="old-price">$78.89</span>
                                            <span class="new-price">$48.89</span>
                                        </div>
                                        <div class="pt-wrapper-btn">
                                            <a href="#" class="pt-btn-wishlist">
                                                <span class="pt-icon">
                                                    <svg><use xlink:href="#icon-wishlist"></use></svg>
                                                    <svg><use xlink:href="#icon-wishlist-add"></use></svg>
                                                </span>
                                                <span class="pt-text">Add to wishlist</span>
                                            </a>
                                            <a href="#" class="pt-btn-compare">
                                                <span class="pt-icon">
                                                    <svg><use xlink:href="#icon-compare"></use></svg>
                                                    <svg><use xlink:href="#icon-compare-add"></use></svg>
                                                </span>
                                                <span class="pt-text">Add to compare</span>
                                            </a>
                                            <a href="#" class="pt-btn-quickview" data-toggle="modal" data-target="#ModalquickView">
                                                <span class="pt-icon">
                                                    <svg><use xlink:href="#icon-quick_view"></use></svg>
                                                </span>
                                                <span class="pt-text">Zoom</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="pt-product">
                            <div class="pt-image-box">
                                <div class="pt-app-btn">
                                    <a href="#" class="pt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left">
                                        <svg><use xlink:href="#icon-wishlist"></use></svg>
                                        <svg><use xlink:href="#icon-wishlist-add"></use></svg>
                                    </a>
                                    <a href="#" class="pt-btn-compare" data-tooltip="Add to Compare" data-tposition="left">
                                        <svg><use xlink:href="#icon-compare"></use></svg>
                                        <svg><use xlink:href="#icon-compare-add"></use></svg>
                                    </a>
                                    <a href="#" class="pt-btn-quickview" data-toggle="modal" data-target="#ModalquickView" data-tooltip="Quick View" data-tposition="left">
                                        <svg><use xlink:href="#icon-quick_view"></use></svg>
                                    </a>
                                </div>
                                <a href="product-type-03.html">
                                    <span class="pt-img">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAArwAAAOCAQMAAACvc5NpAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAHBJREFUeNrswYEAAAAAgKD9qRepAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADg9uCABAAAAEDQ/9f9CBUAAAAAAAAAAAAAAAAAAAAAAGAiOEEAAVstZ/kAAAAASUVORK5CYII=" class="lazyload" data-src="images/product/product-03.jpg" alt="image">
                                    </span>
                                    <span class="pt-img-roll-over">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAArwAAAOCAQMAAACvc5NpAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAHBJREFUeNrswYEAAAAAgKD9qRepAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADg9uCABAAAAEDQ/9f9CBUAAAAAAAAAAAAAAAAAAAAAAGAiOEEAAVstZ/kAAAAASUVORK5CYII=" class="lazyload" data-src="images/product/product-03-02.jpg" alt="image">
                                    </span>
                                </a>
                            </div>
                            <div class="pt-description">
                                <div class="pt-col">
                                    <ul class="pt-add-info">
                                        <li><a href="#">WOMEN???S</a></li>
                                    </ul>
                                    <h2 class="pt-title"><a href="product-type-03.html">Trainers with broguing slogan</a></h2>
                                    <div class="pt-price">
                                        $148.89
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
                                            <span class="pt-text">ADD TO CART</span>
                                        </a>
                                        <div class="pt-price">
                                            $148.89
                                        </div>
                                        <div class="pt-wrapper-btn">
                                            <a href="#" class="pt-btn-wishlist">
                                                <span class="pt-icon">
                                                    <svg><use xlink:href="#icon-wishlist"></use></svg>
                                                    <svg><use xlink:href="#icon-wishlist-add"></use></svg>
                                                </span>
                                                <span class="pt-text">Add to wishlist</span>
                                            </a>
                                            <a href="#" class="pt-btn-compare">
                                                <span class="pt-icon">
                                                    <svg><use xlink:href="#icon-compare"></use></svg>
                                                    <svg><use xlink:href="#icon-compare-add"></use></svg>
                                                </span>
                                                <span class="pt-text">Add to compare</span>
                                            </a>
                                            <a href="#" class="pt-btn-quickview" data-toggle="modal" data-target="#ModalquickView">
                                                <span class="pt-icon">
                                                    <svg><use xlink:href="#icon-quick_view"></use></svg>
                                                </span>
                                                <span class="pt-text">Zoom</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="pt-product">
                            <div class="pt-image-box">
                                <div class="pt-app-btn">
                                    <a href="#" class="pt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left">
                                        <svg><use xlink:href="#icon-wishlist"></use></svg>
                                        <svg><use xlink:href="#icon-wishlist-add"></use></svg>
                                    </a>
                                    <a href="#" class="pt-btn-compare" data-tooltip="Add to Compare" data-tposition="left">
                                        <svg><use xlink:href="#icon-compare"></use></svg>
                                        <svg><use xlink:href="#icon-compare-add"></use></svg>
                                    </a>
                                    <a href="#" class="pt-btn-quickview" data-toggle="modal" data-target="#ModalquickView" data-tooltip="Quick View" data-tposition="left">
                                        <svg><use xlink:href="#icon-quick_view"></use></svg>
                                    </a>
                                </div>
                                <a href="product-type-03.html">
                                    <span class="pt-img">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAArwAAAOCAQMAAACvc5NpAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAHBJREFUeNrswYEAAAAAgKD9qRepAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADg9uCABAAAAEDQ/9f9CBUAAAAAAAAAAAAAAAAAAAAAAGAiOEEAAVstZ/kAAAAASUVORK5CYII=" class="lazyload" data-src="images/product/product-05.jpg" alt="image">
                                    </span>
                                    <span class="pt-img-roll-over">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAArwAAAOCAQMAAACvc5NpAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAHBJREFUeNrswYEAAAAAgKD9qRepAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADg9uCABAAAAEDQ/9f9CBUAAAAAAAAAAAAAAAAAAAAAAGAiOEEAAVstZ/kAAAAASUVORK5CYII=" class="lazyload" data-src="images/product/product-05-02.jpg" alt="image">
                                    </span>
                                </a>
                            </div>
                            <div class="pt-description">
                                <div class="pt-col">
                                    <ul class="pt-add-info">
                                        <li><a href="#">WOMEN???S</a></li>
                                    </ul>
                                    <h2 class="pt-title"><a href="product-type-03.html">Hooded down puffer jacket</a></h2>
                                    <div class="pt-price">
                                        $24
                                    </div>
                                    <div class="pt-option-block">
                                        <ul class="pt-options-swatch">
                                            <li class="active"><a class="options-color pt-color-bg-01" href="#"></a></li>
                                            <li><a class="options-color pt-color-bg-02" href="#"></a></li>
                                            <li><a class="options-color pt-color-bg-03" href="#"></a></li>
                                        </ul>
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
                                            <span class="pt-text">ADD TO CART</span>
                                        </a>
                                        <div class="pt-price">
                                            <span class="old-price">$24</span>
                                            <span class="new-price">$14</span>
                                        </div>
                                        <div class="pt-wrapper-btn">
                                            <a href="#" class="pt-btn-wishlist">
                                                <span class="pt-icon">
                                                    <svg><use xlink:href="#icon-wishlist"></use></svg>
                                                    <svg><use xlink:href="#icon-wishlist-add"></use></svg>
                                                </span>
                                                <span class="pt-text">Add to wishlist</span>
                                            </a>
                                            <a href="#" class="pt-btn-compare">
                                                <span class="pt-icon">
                                                    <svg><use xlink:href="#icon-compare"></use></svg>
                                                    <svg><use xlink:href="#icon-compare-add"></use></svg>
                                                </span>
                                                <span class="pt-text">Add to compare</span>
                                            </a>
                                            <a href="#" class="pt-btn-quickview" data-toggle="modal" data-target="#ModalquickView">
                                                <span class="pt-icon">
                                                    <svg><use xlink:href="#icon-quick_view"></use></svg>
                                                </span>
                                                <span class="pt-text">Zoom</span>
                                            </a>
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