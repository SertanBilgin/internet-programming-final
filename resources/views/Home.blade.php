<!doctype html>
<html lang="tr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{ asset('Frontend/assets/images/favicon-32x32.png')}}" type="image/png" />
    <!--plugins-->
    <link href="{{ asset('Frontend/assets/plugins/OwlCarousel/css/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('Frontend/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
    <link href="{{ asset('Frontend/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
    <link href="{{ asset('Frontend/assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
    <!-- loader-->
    <link href="{{ asset('Frontend/assets/css/pace.min.css')}}" rel="stylesheet" />
    <script src="{{ asset('Frontend/assets/js/pace.min.js')}}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('Frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('Frontend/assets/css/app.css')}}" rel="stylesheet">
    <link href="{{ asset('Frontend/assets/css/icons.css')}}" rel="stylesheet">
    <title> @yield('title')</title>
</head>

<body class="bg-theme bg-theme1">
    <!--wrapper-->

    <div class="wrapper">
        <!--start top header wrapper-->
        <div class="header-wrapper bg-dark-1">


            <div class="header-content pb-3 pb-md-0">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col col-md-auto">
                            <div class="d-flex align-items-center">
                                <div class="mobile-toggle-menu d-lg-none px-lg-2" data-trigger="#navbar_main"><i class='bx bx-menu'></i>
                                </div>
                                <div class="logo d-none d-lg-flex">
                                    <a href="{{ url('/')}}">
                                        <img src="{{asset('Frontend/assets')}}/images/logo-icon.png" class="logo-icon" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md order-4 order-md-2">
                            <div class="input-group flex-nowrap px-xl-4">
                                <input type="text" class="form-control w-100" placeholder="Ürün Ara. . .">
                                <span class="input-group-text cursor-pointer"><i class='bx bx-search'></i></span>
                            </div>
                        </div>
                        <div class="col col-md-auto order-2 order-md-4">
                            <div class="top-cart-icons">
                                <nav class="navbar navbar-expand">
                                    <ul class="navbar-nav ms-auto">
                                        @if (!auth()->check())
                                        


                                             <li class="nav-item"><a href="{{ route('login')}}" class="nav-link cart-link"><span style='font-size:22px'>Giriş Yap</span></a>
                                            </li>
                                            <li class="nav-item"><a href="{{ route('register')}}" class="nav-link cart-link"><span style='font-size:22px'>Kayıt Ol</span></a>
                                            </li>
                                        
                                        @else
                                        
                                            <li class="nav-item"><a href="{{ url('/dashboard')}}" class="nav-link cart-link"><i class='bx bx-user'></i></a>
                                            </li>
                                        
                                        @endif
                                        <li class="nav-item"><a href="{{ url('/Favorilerim')}}" class="nav-link cart-link"><i class='bx bx-heart'></i></a>
                                        </li>
                                        <li class="nav-item dropdown dropdown-large">
                                            <a href="#" class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative cart-link" data-bs-toggle="dropdown"> <span class="alert-count">8</span>
                                                <i class='bx bx-shopping-bag'></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="javascript:;">
                                                    <div class="cart-header">
                                                        <p class="cart-header-title mb-0">8 Öğe</p>
                                                        <p class="cart-header-clear ms-auto mb-0">Sepeti Görüntüle</p>
                                                    </div>
                                                </a>
                                                <div class="cart-list">
                                                    <a class="dropdown-item" href="javascript:;">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-grow-1">
                                                                <h6 class="cart-product-title">Men White T-Shirt</h6>
                                                                <p class="cart-product-price">1 X $29.00</p>
                                                            </div>
                                                            <div class="position-relative">
                                                                <div class="cart-product-cancel position-absolute"><i class='bx bx-x'></i>
                                                                </div>
                                                                <div class="cart-product">
                                                                    <img src="{{asset('Frontend/assets')}}/images/products/01.png" class="" alt="product image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item" href="javascript:;">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-grow-1">
                                                                <h6 class="cart-product-title">Puma Sports Shoes</h6>
                                                                <p class="cart-product-price">1 X $29.00</p>
                                                            </div>
                                                            <div class="position-relative">
                                                                <div class="cart-product-cancel position-absolute"><i class='bx bx-x'></i>
                                                                </div>
                                                                <div class="cart-product">
                                                                    <img src="{{asset('Frontend/assets')}}/images/products/05.png" class="" alt="product image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item" href="javascript:;">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-grow-1">
                                                                <h6 class="cart-product-title">Women Red Sneakers</h6>
                                                                <p class="cart-product-price">1 X $29.00</p>
                                                            </div>
                                                            <div class="position-relative">
                                                                <div class="cart-product-cancel position-absolute"><i class='bx bx-x'></i>
                                                                </div>
                                                                <div class="cart-product">
                                                                    <img src="{{asset('Frontend/assets')}}/images/products/17.png" class="" alt="product image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item" href="javascript:;">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-grow-1">
                                                                <h6 class="cart-product-title">Black Headphone</h6>
                                                                <p class="cart-product-price">1 X $29.00</p>
                                                            </div>
                                                            <div class="position-relative">
                                                                <div class="cart-product-cancel position-absolute"><i class='bx bx-x'></i>
                                                                </div>
                                                                <div class="cart-product">
                                                                    <img src="{{asset('Frontend/assets')}}/images/products/10.png" class="" alt="product image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item" href="javascript:;">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-grow-1">
                                                                <h6 class="cart-product-title">Blue Girl Shoes</h6>
                                                                <p class="cart-product-price">1 X $29.00</p>
                                                            </div>
                                                            <div class="position-relative">
                                                                <div class="cart-product-cancel position-absolute"><i class='bx bx-x'></i>
                                                                </div>
                                                                <div class="cart-product">
                                                                    <img src="{{asset('Frontend/assets')}}/images/products/08.png" class="" alt="product image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item" href="javascript:;">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-grow-1">
                                                                <h6 class="cart-product-title">Men Leather Belt</h6>
                                                                <p class="cart-product-price">1 X $29.00</p>
                                                            </div>
                                                            <div class="position-relative">
                                                                <div class="cart-product-cancel position-absolute"><i class='bx bx-x'></i>
                                                                </div>
                                                                <div class="cart-product">
                                                                    <img src="{{asset('Frontend/assets')}}/images/products/18.png" class="" alt="product image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item" href="javascript:;">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-grow-1">
                                                                <h6 class="cart-product-title">Men Yellow T-Shirt</h6>
                                                                <p class="cart-product-price">1 X $29.00</p>
                                                            </div>
                                                            <div class="position-relative">
                                                                <div class="cart-product-cancel position-absolute"><i class='bx bx-x'></i>
                                                                </div>
                                                                <div class="cart-product">
                                                                    <img src="{{asset('Frontend/assets')}}/images/products/04.png" class="" alt="product image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item" href="javascript:;">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-grow-1">
                                                                <h6 class="cart-product-title">Pool Charir</h6>
                                                                <p class="cart-product-price">1 X $29.00</p>
                                                            </div>
                                                            <div class="position-relative">
                                                                <div class="cart-product-cancel position-absolute"><i class='bx bx-x'></i>
                                                                </div>
                                                                <div class="cart-product">
                                                                    <img src="{{asset('Frontend/assets')}}/images/products/16.png" class="" alt="product image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <a href="javascript:;">
                                                    <div class="text-center cart-footer d-flex align-items-center">
                                                        <h5 class="mb-0">Toplam</h5>
                                                        <h5 class="mb-0 ms-auto">$189.00</h5>
                                                    </div>
                                                </a>
                                                <div class="d-grid p-3 border-top"> <a href="{{ url('/Sepet')}}" class="btn btn-light btn-ecomm">CHECKOUT</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
            </div>
            <div class="primary-menu border-top">
                <div class="container">
                    <nav id="navbar_main" class="mobile-offcanvas navbar navbar-expand-lg">
                        <div class="offcanvas-header">
                            <button class="btn-close float-end"></button>
                            <h5 class="py-2 text-white">Navigasyon</h5>
                        </div>
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"> Tüm Kategoriler<i class='bx bx-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item dropdown-toggle dropdown-toggle-nocaret" href="#">Telefon <i class='bx bx-chevron-right float-end'></i></a>
                                        <ul class="submenu dropdown-menu">
                                            <li><a class="dropdown-item" href="{{ url('/Android_telefonlar')}}">Android Telefonlar</a>
                                            </li>
                                            <li><a class="dropdown-item" href="shop-grid-right-sidebar.html">İos Telefonlar</a>
                                            </li>
                                            <li><a class="dropdown-item" href="shop-list-left-sidebar.html">Akıllı Saat</a>
                                            </li>
                                            <li><a class="dropdown-item" href="shop-list-right-sidebar.html">Kulaklık</a>
                                            </li>
                                            <li><a class="dropdown-item" href="shop-grid-filter-on-top.html">Telefon Aksesuarları</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item dropdown-toggle dropdown-toggle-nocaret" href="#">Bilgisayar <i class='bx bx-chevron-right float-end'></i></a>
                                        <ul class="submenu dropdown-menu">
                                            <li><a class="dropdown-item" href="shop-grid-left-sidebar.html">Laptoplar</a>
                                            </li>
                                            <li><a class="dropdown-item" href="shop-grid-right-sidebar.html">Masaüstü Bilgisayar</a>
                                            </li>
                                            <li><a class="dropdown-item" href="shop-list-left-sidebar.html">Tabletler</a>
                                            </li>
                                            <li><a class="dropdown-item" href="shop-list-right-sidebar.html">Bilgisayar Bileşenleri</a>
                                            </li>
                                            <li><a class="dropdown-item" href="shop-grid-filter-on-top.html">Ofis Malzemeleri</a>
                                            </li>
                                            <li><a class="dropdown-item" href="shop-grid-filter-on-top.html">Hafıza ve Depolama</a>
                                            </li>
                                            <li><a class="dropdown-item" href="shop-grid-filter-on-top.html">Oyuncu Aksesuarları</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item dropdown-toggle dropdown-toggle-nocaret" href="#">Tv,Görüntü,Ses <i class='bx bx-chevron-right float-end'></i></a>
                                        <ul class="submenu dropdown-menu">
                                            <li><a class="dropdown-item" href="shop-grid-left-sidebar.html">Televizyon</a>
                                            </li>
                                            <li><a class="dropdown-item" href="shop-grid-right-sidebar.html">Media Player</a>
                                            </li>
                                            <li><a class="dropdown-item" href="shop-list-left-sidebar.html">Ses Sistemleri</a>
                                            </li>
                                            <li><a class="dropdown-item" href="shop-list-right-sidebar.html">Kulaklık</a>
                                            </li>
                                            <li><a class="dropdown-item" href="shop-grid-filter-on-top.html">Ofis Malzemeleri</a>
                                            </li>
                                            <li><a class="dropdown-item" href="shop-grid-filter-on-top.html">Hafıza ve Depolama</a>
                                            </li>
                                            <li><a class="dropdown-item" href="shop-grid-filter-on-top.html">Oyuncu Aksesuarları</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="about-us.html">Aksesuarlar</a>
                                    </li>
                                    <li><a class="dropdown-item" href="contact-us.html">Beyaz Eşya</a>
                                    </li>
                                    <li><a class="dropdown-item" href="authentication-signin.html">Ev Aletleri Yaşam</a>
                                    </li>
                                    <li><a class="dropdown-item" href="authentication-signup.html">Kişisel Bakım</a>
                                    </li>
                                    <li><a class="dropdown-item" href="authentication-forgot-password.html">Spor & Oyun & Outdoor</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item"> <a class="nav-link" href="{{ url('/Hakkimizda')}}">Hakkımızda </a>
                            </li>
                            <li class="nav-item"> <a class="nav-link" href="{{ url('/Bize_Ulaşin')}}">Bize Ulaşın </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!--end top header wrapper-->


        @yield('body')
        @yield('AboutUs')
		@yield('ContactUs')
		@yield('MyFavorites')
		@yield('AndroidPhone-25293')
		@yield('ProductDetails')
		@yield('Shop-cart')
        @yield('Profile')

















        <!--start footer section-->
        <footer>
            <section class="py-4 bg-dark-1">
                <div class="container">
                    <!--end row-->
                    <div class="row row-cols-1 row-cols-md-2 align-items-center">
                        <div class="col">
                            <p class="mb-0">Copyright © 2021. All right reserved.</p>
                        </div>
                        <div class="col text-end">
                            <div class="payment-icon">
                                <div class="row row-cols-auto g-2 justify-content-end">
                                    <div class="col">
                                        <img src="{{asset('Frontend/assets')}}/images/icons/visa.png" alt="" />
                                    </div>
                                    <div class="col">
                                        <img src="{{asset('Frontend/assets')}}/images/icons/paypal.png" alt="" />
                                    </div>
                                    <div class="col">
                                        <img src="{{asset('Frontend/assets')}}/images/icons/mastercard.png" alt="" />
                                    </div>
                                    <div class="col">
                                        <img src="{{asset('Frontend/assets')}}/images/icons/american-express.png" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
            </section>
        </footer>
        <!--end footer section-->

        <!--start quick view product-->
        <!-- Modal -->
        <div class="modal fade" id="QuickViewProduct">
            <div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-xl-down">
                <div class="modal-content bg-dark-4 rounded-0 border-0">
                    <div class="modal-body">
                        <button type="button" class="btn-close float-end" data-bs-dismiss="modal"></button>
                        <div class="row g-0">
                            <div class="col-12 col-lg-6">
                                <div class="image-zoom-section">
                                    <div class="product-gallery owl-carousel owl-theme border mb-3 p-3" data-slider-id="1">
                                        <div class="item">
                                            <img src="{{asset('Frontend/assets')}}/images/product-gallery/01.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="item">
                                            <img src="{{asset('Frontend/assets')}}/images/product-gallery/02.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="item">
                                            <img src="{{asset('Frontend/assets')}}/images/product-gallery/03.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="item">
                                            <img src="{{asset('Frontend/assets')}}/images/product-gallery/04.png" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="owl-thumbs d-flex justify-content-center" data-slider-id="1">
                                        <button class="owl-thumb-item">
                                            <img src="{{asset('Frontend/assets')}}/images/product-gallery/01.png" class="" alt="">
                                        </button>
                                        <button class="owl-thumb-item">
                                            <img src="{{asset('Frontend/assets')}}/images/product-gallery/02.png" class="" alt="">
                                        </button>
                                        <button class="owl-thumb-item">
                                            <img src="{{asset('Frontend/assets')}}/images/product-gallery/03.png" class="" alt="">
                                        </button>
                                        <button class="owl-thumb-item">
                                            <img src="{{asset('Frontend/assets')}}/images/product-gallery/04.png" class="" alt="">
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="product-info-section p-3">
                                    <h3 class="mt-3 mt-lg-0 mb-0">Allen Solly Men's Polo T-Shirt</h3>
                                    <div class="product-rating d-flex align-items-center mt-2">
                                        <div class="rates cursor-pointer font-13"> <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-light-4"></i>
                                        </div>
                                        <div class="ms-1">
                                            <p class="mb-0">(24 Ratings)</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mt-3 gap-2">
                                        <h5 class="mb-0 text-decoration-line-through text-light-3">$98.00</h5>
                                        <h4 class="mb-0">$49.00</h4>
                                    </div>
                                    <div class="mt-3">
                                        <h6>Discription :</h6>
                                        <p class="mb-0">Virgil Abloh’s Off-White is a streetwear-inspired collection that continues to break away from the conventions of mainstream fashion. Made in Italy, these black and brown Odsy-1000 low-top sneakers.</p>
                                    </div>
                                    <dl class="row mt-3">
                                        <dt class="col-sm-3">Product id</dt>
                                        <dd class="col-sm-9">#BHU5879</dd>
                                        <dt class="col-sm-3">Delivery</dt>
                                        <dd class="col-sm-9">Russia, USA, and Europe</dd>
                                    </dl>
                                    <div class="row row-cols-auto align-items-center mt-3">
                                        <div class="col">
                                            <label class="form-label">Quantity</label>
                                            <select class="form-select form-select-sm">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Size</label>
                                            <select class="form-select form-select-sm">
                                                <option>S</option>
                                                <option>M</option>
                                                <option>L</option>
                                                <option>XS</option>
                                                <option>XL</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Colors</label>
                                            <div class="color-indigators d-flex align-items-center gap-2">
                                                <div class="color-indigator-item bg-primary"></div>
                                                <div class="color-indigator-item bg-danger"></div>
                                                <div class="color-indigator-item bg-success"></div>
                                                <div class="color-indigator-item bg-warning"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end row-->
                                    <div class="d-flex gap-2 mt-3">
                                        <a href="javascript:;" class="btn btn-white btn-ecomm"> <i class="bx bxs-cart-add"></i>Add to Cart</a> <a href="javascript:;" class="btn btn-light btn-ecomm"><i class="bx bx-heart"></i>Add to Wishlist</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end row-->
                    </div>
                </div>
            </div>
        </div>
        <!--end quick view product-->
        <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
    </div>
    <!--end wrapper-->













    <!-- Bootstrap JS -->
    <script src="{{ asset('Frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
    <!--plugins-->
    <script src="{{ asset('Frontend/assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('Frontend/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
    <script src="{{ asset('Frontend/assets/plugins/OwlCarousel/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('Frontend/assets/plugins/OwlCarousel/js/owl.carousel2.thumbs.min.js')}}"></script>
    <script src="{{ asset('Frontend/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
    <script src="{{ asset('Frontend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
    <!--app JS-->
    <script src="{{ asset('Frontend/assets/js/app.js')}}"></script>
    <script src="{{ asset('Frontend/assets/js/index.js')}}"></script>
</body>
</html>
