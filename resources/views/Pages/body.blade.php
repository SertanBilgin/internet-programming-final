@extends('Home')
@section('title', 'Anasayfa')
@section('body')


<!--start slider section-->
<section class="slider-section">
    <div class="first-slider">
        <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row d-flex align-items-center">
                        <div class="col d-none d-lg-flex justify-content-center">
                            <div class="">
                                <h3 class="h3 fw-light">Has just arrived!</h3>
                                <h1 class="h1">Huge Summer Collection</h1>
                                <p class="pb-3">Swimwear, Tops, Shorts, Sunglasses &amp; much more...</p>
                                <div class=""> <a class="btn btn-light btn-ecomm" href="javascript:;">Shop Now <i class='bx bx-chevron-right'></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="{{asset('Frontend/assets')}}/images/slider/04.png" class="img-fluid" alt="...">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row d-flex align-items-center">
                        <div class="col d-none d-lg-flex justify-content-center">
                            <div class="">
                                <h3 class="h3 fw-light">Hurry up! Limited time offer.</h3>
                                <h1 class="h1">Women Sportswear Sale</h1>
                                <p class="pb-3">Sneakers, Keds, Sweatshirts, Hoodies &amp; much more...</p>
                                <div class=""> <a class="btn btn-white btn-ecomm" href="javascript:;">Shop Now <i class='bx bx-chevron-right'></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="{{asset('Frontend/assets')}}/images/slider/05.png" class="img-fluid" alt="...">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row d-flex align-items-center">
                        <div class="col d-none d-lg-flex justify-content-center">
                            <div class="">
                                <h3 class="h3 fw-light">Complete your look with</h3>
                                <h1 class="h1">New Men's Accessories</h1>
                                <p class="pb-3">Hats &amp; Caps, Sunglasses, Bags &amp; much more...</p>
                                <div class=""> <a class="btn btn-dark btn-ecomm" href="javascript:;">Shop Now <i class='bx bx-chevron-right'></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="{{asset('Frontend/assets')}}/images/slider/03.png" class="img-fluid" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleDark" role="button" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleDark" role="button" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </div>
</section>
<!--end slider section-->

<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--start information-->
        <section class="py-3 border-top border-bottom">
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-3 row-group align-items-center">
                    <div class="col p-3">
                        <div class="d-flex align-items-center">
                            <div class="fs-1 text-white"> <i class='bx bx-taxi'></i>
                            </div>
                            <div class="info-box-content ps-3">
                                <h6 class="mb-0">Ücretsiz Kargo & İade</h6>
                                <p class="mb-0">49TL üzerindeki tüm siparişlerde ücretsiz kargo</p>
                            </div>
                        </div>
                    </div>
                    <div class="col p-3">
                        <div class="d-flex align-items-center">
                            <div class="fs-1 text-white"> <i class='bx bx-dollar-circle'></i>
                            </div>
                            <div class="info-box-content ps-3">
                                <h6 class="mb-0">Para iade Garantisi</h6>
                                <p class="mb-0">%100 para iade garantisi</p>
                            </div>
                        </div>
                    </div>
                    <div class="col p-3">
                        <div class="d-flex align-items-center">
                            <div class="fs-1 text-white"> <i class='bx bx-support'></i>
                            </div>
                            <div class="info-box-content ps-3">
                                <h6 class="mb-0">7/24 Çevrimiçi Destek</h6>
                                <p class="mb-0">7/24 Gün Boyunca Müthiş Destek</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </section>
        <!--end information-->

        <!--start pramotion-->
        <section class="py-4">
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                    <div class="col">
                        <div class="card rounded-0">
                            <div class="row g-0 align-items-center">
                                <div class="col">
                                    <img src="{{asset('Frontend/assets')}}/images/promo/01.png" class="img-fluid" alt="" />
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="card-title text-uppercase">Cep Telefonu</h5>
                                        <a href="javascript:;" class="btn btn-light btn-ecomm">şimdi satın al</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card rounded-0">
                            <div class="row g-0 align-items-center">
                                <div class="col">
                                    <img src="{{asset('Frontend/assets')}}/images/promo/02.png" class="img-fluid" alt="" />
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="card-title text-uppercase">Notebook</h5>
                                        <a href="javascript:;" class="btn btn-light btn-ecomm">şimdi satın al</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card rounded-0">
                            <div class="row g-0 align-items-center">
                                <div class="col">
                                    <img src="{{asset('Frontend/assets')}}/images/promo/03.png" class="img-fluid" alt="" />
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="card-title text-uppercase">Televizyonlar</h5>
                                        <a href="javascript:;" class="btn btn-light btn-ecomm">şimdi satın al</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!--end row-->
            </div>
        </section>
        <!--end pramotion-->

        <!--start New Arrivals-->
        <section class="py-4">
            <div class="container">
                <div class="d-flex align-items-center">
                    <h5 class="text-uppercase mb-0">Vortex Öneriyor</h5>
                </div>
                <hr />
                <div class="product-grid">
                    <div class="new-arrivals owl-carousel owl-theme">
                        <div class="item">
                            <div class="card rounded-0 product-card">
                                <div class="card-header bg-transparent border-bottom-0">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <a href="javascript:;">
                                            <div class="product-wishlist"> <i class='bx bx-heart'></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <a href="product-details.html">
                                    <img src="{{asset('Frontend/assets')}}/images/products/09.png" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <div class="product-info">
                                        <a href="javascript:;">
                                            <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                        </a>
                                        <a href="javascript:;">
                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
                                                <span class="text-white fs-5">$49.00</span>
                                            </div>
                                            <div class="cursor-pointer ms-auto"> <span>5.0</span> <i class="bx bxs-star text-white"></i>
                                            </div>
                                        </div>
                                        <div class="product-action mt-2">
                                            <div class="d-grid gap-2">
                                                <a href="javascript:;" class="btn btn-light btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class='bx bx-zoom-in'></i>Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card rounded-0 product-card">
                                <div class="card-header bg-transparent border-bottom-0">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <a href="javascript:;">
                                            <div class="product-wishlist"> <i class='bx bx-heart'></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <a href="product-details.html">
                                    <img src="{{asset('Frontend/assets')}}/images/products/10.png" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <div class="product-info">
                                        <a href="javascript:;">
                                            <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                        </a>
                                        <a href="javascript:;">
                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
                                                <span class="text-white fs-5">$49.00</span>
                                            </div>
                                            <div class="cursor-pointer ms-auto"> <span>5.0</span> <i class="bx bxs-star text-white"></i>
                                            </div>
                                        </div>
                                        <div class="product-action mt-2">
                                            <div class="d-grid gap-2">
                                                <a href="javascript:;" class="btn btn-light btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class='bx bx-zoom-in'></i>Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card rounded-0 product-card">
                                <div class="card-header bg-transparent border-bottom-0">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <a href="javascript:;">
                                            <div class="product-wishlist"> <i class='bx bx-heart'></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <a href="product-details.html">
                                    <img src="{{asset('Frontend/assets')}}/images/products/11.png" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <div class="product-info">
                                        <a href="javascript:;">
                                            <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                        </a>
                                        <a href="javascript:;">
                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
                                                <span class="text-white fs-5">$49.00</span>
                                            </div>
                                            <div class="cursor-pointer ms-auto"> <span>4.9</span> <i class="bx bxs-star text-white"></i>
                                            </div>
                                        </div>
                                        <div class="product-action mt-2">
                                            <div class="d-grid gap-2">
                                                <a href="javascript:;" class="btn btn-light btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class='bx bx-zoom-in'></i>Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card rounded-0 product-card">
                                <div class="card-header bg-transparent border-bottom-0">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <a href="javascript:;">
                                            <div class="product-wishlist"> <i class='bx bx-heart'></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <a href="product-details.html">
                                    <img src="{{asset('Frontend/assets')}}/images/products/12.png" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <div class="product-info">
                                        <a href="javascript:;">
                                            <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                        </a>
                                        <a href="javascript:;">
                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
                                                <span class="text-white fs-5">$49.00</span>
                                            </div>
                                            <div class="cursor-pointer ms-auto"> <span>5.0</span> <i class="bx bxs-star text-white"></i>
                                            </div>
                                        </div>
                                        <div class="product-action mt-2">
                                            <div class="d-grid gap-2">
                                                <a href="javascript:;" class="btn btn-light btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class='bx bx-zoom-in'></i>Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card rounded-0 product-card">
                                <div class="card-header bg-transparent border-bottom-0">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <a href="javascript:;">
                                            <div class="product-wishlist"> <i class='bx bx-heart'></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <a href="product-details.html">
                                    <img src="{{asset('Frontend/assets')}}/images/products/13.png" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <div class="product-info">
                                        <a href="javascript:;">
                                            <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                        </a>
                                        <a href="javascript:;">
                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
                                                <span class="text-white fs-5">$49.00</span>
                                            </div>
                                            <div class="cursor-pointer ms-auto"> <span>3.9</span> <i class="bx bxs-star text-white"></i>
                                            </div>
                                        </div>
                                        <div class="product-action mt-2">
                                            <div class="d-grid gap-2">
                                                <a href="javascript:;" class="btn btn-light btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class='bx bx-zoom-in'></i>Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card rounded-0 product-card">
                                <div class="card-header bg-transparent border-bottom-0">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <a href="javascript:;">
                                            <div class="product-wishlist"> <i class='bx bx-heart'></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <a href="product-details.html">
                                    <img src="{{asset('Frontend/assets')}}/images/products/14.png" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <div class="product-info">
                                        <a href="javascript:;">
                                            <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                        </a>
                                        <a href="javascript:;">
                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
                                                <span class="text-white fs-5">$49.00</span>
                                            </div>
                                            <div class="cursor-pointer ms-auto"> <span>5.0</span> <i class="bx bxs-star text-white"></i>
                                            </div>
                                        </div>
                                        <div class="product-action mt-2">
                                            <div class="d-grid gap-2">
                                                <a href="javascript:;" class="btn btn-light btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class='bx bx-zoom-in'></i>Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card rounded-0 product-card">
                                <div class="card-header bg-transparent border-bottom-0">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <a href="javascript:;">
                                            <div class="product-wishlist"> <i class='bx bx-heart'></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <a href="product-details.html">
                                    <img src="{{asset('Frontend/assets')}}/images/products/15.png" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <div class="product-info">
                                        <a href="javascript:;">
                                            <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                        </a>
                                        <a href="javascript:;">
                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
                                                <span class="text-white fs-5">$49.00</span>
                                            </div>
                                            <div class="cursor-pointer ms-auto"> <span>5.0</span> <i class="bx bxs-star text-white"></i>
                                            </div>
                                        </div>
                                        <div class="product-action mt-2">
                                            <div class="d-grid gap-2">
                                                <a href="javascript:;" class="btn btn-light btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class='bx bx-zoom-in'></i>Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card rounded-0 product-card">
                                <div class="card-header bg-transparent border-bottom-0">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <a href="javascript:;">
                                            <div class="product-wishlist"> <i class='bx bx-heart'></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <a href="product-details.html">
                                    <img src="{{asset('Frontend/assets')}}/images/products/16.png" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <div class="product-info">
                                        <a href="javascript:;">
                                            <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                        </a>
                                        <a href="javascript:;">
                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
                                                <span class="text-white fs-5">$49.00</span>
                                            </div>
                                            <div class="cursor-pointer ms-auto"> <span>5.0</span> <i class="bx bxs-star text-white"></i>
                                            </div>
                                        </div>
                                        <div class="product-action mt-2">
                                            <div class="d-grid gap-2">
                                                <a href="javascript:;" class="btn btn-light btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class='bx bx-zoom-in'></i>Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card rounded-0 product-card">
                                <div class="card-header bg-transparent border-bottom-0">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <a href="javascript:;">
                                            <div class="product-wishlist"> <i class='bx bx-heart'></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <a href="product-details.html">
                                    <img src="{{asset('Frontend/assets')}}/images/products/17.png" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <div class="product-info">
                                        <a href="javascript:;">
                                            <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                        </a>
                                        <a href="javascript:;">
                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
                                                <span class="text-white fs-5">$49.00</span>
                                            </div>
                                            <div class="cursor-pointer ms-auto"> <span>4.0</span> <i class="bx bxs-star text-white"></i>
                                            </div>
                                        </div>
                                        <div class="product-action mt-2">
                                            <div class="d-grid gap-2">
                                                <a href="javascript:;" class="btn btn-light btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class='bx bx-zoom-in'></i>Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card rounded-0 product-card">
                                <div class="card-header bg-transparent border-bottom-0">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <a href="javascript:;">
                                            <div class="product-wishlist"> <i class='bx bx-heart'></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <a href="product-details.html">
                                    <img src="{{asset('Frontend/assets')}}/images/products/18.png" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <div class="product-info">
                                        <a href="javascript:;">
                                            <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                        </a>
                                        <a href="javascript:;">
                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
                                                <span class="text-white fs-5">$49.00</span>
                                            </div>
                                            <div class="cursor-pointer ms-auto"> <span>5.0</span> <i class="bx bxs-star text-white"></i>
                                            </div>
                                        </div>
                                        <div class="product-action mt-2">
                                            <div class="d-grid gap-2">
                                                <a href="javascript:;" class="btn btn-light btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class='bx bx-zoom-in'></i>Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card rounded-0 product-card">
                                <div class="card-header bg-transparent border-bottom-0">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <a href="javascript:;">
                                            <div class="product-wishlist"> <i class='bx bx-heart'></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <a href="product-details.html">
                                    <img src="{{asset('Frontend/assets')}}/images/products/19.png" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <div class="product-info">
                                        <a href="javascript:;">
                                            <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                        </a>
                                        <a href="javascript:;">
                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
                                                <span class="text-white fs-5">$49.00</span>
                                            </div>
                                            <div class="cursor-pointer ms-auto"> <span>4.5</span> <i class="bx bxs-star text-white"></i>
                                            </div>
                                        </div>
                                        <div class="product-action mt-2">
                                            <div class="d-grid gap-2">
                                                <a href="javascript:;" class="btn btn-light btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class='bx bx-zoom-in'></i>Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card rounded-0 product-card">
                                <div class="card-header bg-transparent border-bottom-0">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <a href="javascript:;">
                                            <div class="product-wishlist"> <i class='bx bx-heart'></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <a href="product-details.html">
                                    <img src="{{asset('Frontend/assets')}}/images/products/20.png" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <div class="product-info">
                                        <a href="javascript:;">
                                            <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                        </a>
                                        <a href="javascript:;">
                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
                                                <span class="text-white fs-5">$49.00</span>
                                            </div>
                                            <div class="cursor-pointer ms-auto"> <span>5.0</span> <i class="bx bxs-star text-white"></i>
                                            </div>
                                        </div>
                                        <div class="product-action mt-2">
                                            <div class="d-grid gap-2">
                                                <a href="javascript:;" class="btn btn-light btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class='bx bx-zoom-in'></i>Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--end New Arrivals-->

        <!--start New Arrivals-->
        <section class="py-4">
            <div class="container">
                <div class="d-flex align-items-center">
                    <h5 class="text-uppercase mb-0"> Aksesuarlarda Öne Çıkan Ürünler</h5>
                </div>
                <hr />
                <div class="product-grid">
                    <div class="new-arrivals owl-carousel owl-theme">
                        <div class="item">
                            <div class="card rounded-0 product-card">
                                <div class="card-header bg-transparent border-bottom-0">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <a href="javascript:;">
                                            <div class="product-wishlist"> <i class='bx bx-heart'></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <a href="product-details.html">
                                    <img src="{{asset('Frontend/assets')}}/images/products/09.png" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <div class="product-info">
                                        <a href="javascript:;">
                                            <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                        </a>
                                        <a href="javascript:;">
                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
                                                <span class="text-white fs-5">$49.00</span>
                                            </div>
                                            <div class="cursor-pointer ms-auto"> <span>5.0</span> <i class="bx bxs-star text-white"></i>
                                            </div>
                                        </div>
                                        <div class="product-action mt-2">
                                            <div class="d-grid gap-2">
                                                <a href="javascript:;" class="btn btn-light btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class='bx bx-zoom-in'></i>Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card rounded-0 product-card">
                                <div class="card-header bg-transparent border-bottom-0">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <a href="javascript:;">
                                            <div class="product-wishlist"> <i class='bx bx-heart'></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <a href="product-details.html">
                                    <img src="{{asset('Frontend/assets')}}/images/products/10.png" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <div class="product-info">
                                        <a href="javascript:;">
                                            <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                        </a>
                                        <a href="javascript:;">
                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
                                                <span class="text-white fs-5">$49.00</span>
                                            </div>
                                            <div class="cursor-pointer ms-auto"> <span>5.0</span> <i class="bx bxs-star text-white"></i>
                                            </div>
                                        </div>
                                        <div class="product-action mt-2">
                                            <div class="d-grid gap-2">
                                                <a href="javascript:;" class="btn btn-light btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class='bx bx-zoom-in'></i>Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card rounded-0 product-card">
                                <div class="card-header bg-transparent border-bottom-0">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <a href="javascript:;">
                                            <div class="product-wishlist"> <i class='bx bx-heart'></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <a href="product-details.html">
                                    <img src="{{asset('Frontend/assets')}}/images/products/11.png" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <div class="product-info">
                                        <a href="javascript:;">
                                            <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                        </a>
                                        <a href="javascript:;">
                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
                                                <span class="text-white fs-5">$49.00</span>
                                            </div>
                                            <div class="cursor-pointer ms-auto"> <span>4.9</span> <i class="bx bxs-star text-white"></i>
                                            </div>
                                        </div>
                                        <div class="product-action mt-2">
                                            <div class="d-grid gap-2">
                                                <a href="javascript:;" class="btn btn-light btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class='bx bx-zoom-in'></i>Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card rounded-0 product-card">
                                <div class="card-header bg-transparent border-bottom-0">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <a href="javascript:;">
                                            <div class="product-wishlist"> <i class='bx bx-heart'></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <a href="product-details.html">
                                    <img src="{{asset('Frontend/assets')}}/images/products/12.png" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <div class="product-info">
                                        <a href="javascript:;">
                                            <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                        </a>
                                        <a href="javascript:;">
                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
                                                <span class="text-white fs-5">$49.00</span>
                                            </div>
                                            <div class="cursor-pointer ms-auto"> <span>5.0</span> <i class="bx bxs-star text-white"></i>
                                            </div>
                                        </div>
                                        <div class="product-action mt-2">
                                            <div class="d-grid gap-2">
                                                <a href="javascript:;" class="btn btn-light btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class='bx bx-zoom-in'></i>Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card rounded-0 product-card">
                                <div class="card-header bg-transparent border-bottom-0">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <a href="javascript:;">
                                            <div class="product-wishlist"> <i class='bx bx-heart'></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <a href="product-details.html">
                                    <img src="{{asset('Frontend/assets')}}/images/products/13.png" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <div class="product-info">
                                        <a href="javascript:;">
                                            <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                        </a>
                                        <a href="javascript:;">
                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
                                                <span class="text-white fs-5">$49.00</span>
                                            </div>
                                            <div class="cursor-pointer ms-auto"> <span>3.9</span> <i class="bx bxs-star text-white"></i>
                                            </div>
                                        </div>
                                        <div class="product-action mt-2">
                                            <div class="d-grid gap-2">
                                                <a href="javascript:;" class="btn btn-light btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class='bx bx-zoom-in'></i>Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card rounded-0 product-card">
                                <div class="card-header bg-transparent border-bottom-0">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <a href="javascript:;">
                                            <div class="product-wishlist"> <i class='bx bx-heart'></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <a href="product-details.html">
                                    <img src="{{asset('Frontend/assets')}}/images/products/14.png" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <div class="product-info">
                                        <a href="javascript:;">
                                            <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                        </a>
                                        <a href="javascript:;">
                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
                                                <span class="text-white fs-5">$49.00</span>
                                            </div>
                                            <div class="cursor-pointer ms-auto"> <span>5.0</span> <i class="bx bxs-star text-white"></i>
                                            </div>
                                        </div>
                                        <div class="product-action mt-2">
                                            <div class="d-grid gap-2">
                                                <a href="javascript:;" class="btn btn-light btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class='bx bx-zoom-in'></i>Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card rounded-0 product-card">
                                <div class="card-header bg-transparent border-bottom-0">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <a href="javascript:;">
                                            <div class="product-wishlist"> <i class='bx bx-heart'></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <a href="product-details.html">
                                    <img src="{{asset('Frontend/assets')}}/images/products/15.png" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <div class="product-info">
                                        <a href="javascript:;">
                                            <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                        </a>
                                        <a href="javascript:;">
                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
                                                <span class="text-white fs-5">$49.00</span>
                                            </div>
                                            <div class="cursor-pointer ms-auto"> <span>5.0</span> <i class="bx bxs-star text-white"></i>
                                            </div>
                                        </div>
                                        <div class="product-action mt-2">
                                            <div class="d-grid gap-2">
                                                <a href="javascript:;" class="btn btn-light btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class='bx bx-zoom-in'></i>Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card rounded-0 product-card">
                                <div class="card-header bg-transparent border-bottom-0">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <a href="javascript:;">
                                            <div class="product-wishlist"> <i class='bx bx-heart'></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <a href="product-details.html">
                                    <img src="{{asset('Frontend/assets')}}/images/products/16.png" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <div class="product-info">
                                        <a href="javascript:;">
                                            <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                        </a>
                                        <a href="javascript:;">
                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
                                                <span class="text-white fs-5">$49.00</span>
                                            </div>
                                            <div class="cursor-pointer ms-auto"> <span>5.0</span> <i class="bx bxs-star text-white"></i>
                                            </div>
                                        </div>
                                        <div class="product-action mt-2">
                                            <div class="d-grid gap-2">
                                                <a href="javascript:;" class="btn btn-light btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class='bx bx-zoom-in'></i>Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card rounded-0 product-card">
                                <div class="card-header bg-transparent border-bottom-0">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <a href="javascript:;">
                                            <div class="product-wishlist"> <i class='bx bx-heart'></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <a href="product-details.html">
                                    <img src="{{asset('Frontend/assets')}}/images/products/17.png" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <div class="product-info">
                                        <a href="javascript:;">
                                            <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                        </a>
                                        <a href="javascript:;">
                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
                                                <span class="text-white fs-5">$49.00</span>
                                            </div>
                                            <div class="cursor-pointer ms-auto"> <span>4.0</span> <i class="bx bxs-star text-white"></i>
                                            </div>
                                        </div>
                                        <div class="product-action mt-2">
                                            <div class="d-grid gap-2">
                                                <a href="javascript:;" class="btn btn-light btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class='bx bx-zoom-in'></i>Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card rounded-0 product-card">
                                <div class="card-header bg-transparent border-bottom-0">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <a href="javascript:;">
                                            <div class="product-wishlist"> <i class='bx bx-heart'></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <a href="product-details.html">
                                    <img src="{{asset('Frontend/assets')}}/images/products/18.png" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <div class="product-info">
                                        <a href="javascript:;">
                                            <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                        </a>
                                        <a href="javascript:;">
                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
                                                <span class="text-white fs-5">$49.00</span>
                                            </div>
                                            <div class="cursor-pointer ms-auto"> <span>5.0</span> <i class="bx bxs-star text-white"></i>
                                            </div>
                                        </div>
                                        <div class="product-action mt-2">
                                            <div class="d-grid gap-2">
                                                <a href="javascript:;" class="btn btn-light btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class='bx bx-zoom-in'></i>Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card rounded-0 product-card">
                                <div class="card-header bg-transparent border-bottom-0">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <a href="javascript:;">
                                            <div class="product-wishlist"> <i class='bx bx-heart'></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <a href="product-details.html">
                                    <img src="{{asset('Frontend/assets')}}/images/products/19.png" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <div class="product-info">
                                        <a href="javascript:;">
                                            <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                        </a>
                                        <a href="javascript:;">
                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
                                                <span class="text-white fs-5">$49.00</span>
                                            </div>
                                            <div class="cursor-pointer ms-auto"> <span>4.5</span> <i class="bx bxs-star text-white"></i>
                                            </div>
                                        </div>
                                        <div class="product-action mt-2">
                                            <div class="d-grid gap-2">
                                                <a href="javascript:;" class="btn btn-light btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class='bx bx-zoom-in'></i>Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card rounded-0 product-card">
                                <div class="card-header bg-transparent border-bottom-0">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <a href="javascript:;">
                                            <div class="product-wishlist"> <i class='bx bx-heart'></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <a href="product-details.html">
                                    <img src="{{asset('Frontend/assets')}}/images/products/20.png" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <div class="product-info">
                                        <a href="javascript:;">
                                            <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                        </a>
                                        <a href="javascript:;">
                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
                                                <span class="text-white fs-5">$49.00</span>
                                            </div>
                                            <div class="cursor-pointer ms-auto"> <span>5.0</span> <i class="bx bxs-star text-white"></i>
                                            </div>
                                        </div>
                                        <div class="product-action mt-2">
                                            <div class="d-grid gap-2">
                                                <a href="javascript:;" class="btn btn-light btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class='bx bx-zoom-in'></i>Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--end New Arrivals-->

        <!--start New Arrivals-->
        <section class="py-4">
            <div class="container">
                <div class="d-flex align-items-center">
                    <h5 class="text-uppercase mb-0"> Ev Aletlerinde Öne Çıkan Ürünler</h5>
                </div>
                <hr />
                <div class="product-grid">
                    <div class="new-arrivals owl-carousel owl-theme">
                        <div class="item">
                            <div class="card rounded-0 product-card">
                                <div class="card-header bg-transparent border-bottom-0">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <a href="javascript:;">
                                            <div class="product-wishlist"> <i class='bx bx-heart'></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <a href="product-details.html">
                                    <img src="{{asset('Frontend/assets')}}/images/products/09.png" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <div class="product-info">
                                        <a href="javascript:;">
                                            <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                        </a>
                                        <a href="javascript:;">
                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
                                                <span class="text-white fs-5">$49.00</span>
                                            </div>
                                            <div class="cursor-pointer ms-auto"> <span>5.0</span> <i class="bx bxs-star text-white"></i>
                                            </div>
                                        </div>
                                        <div class="product-action mt-2">
                                            <div class="d-grid gap-2">
                                                <a href="javascript:;" class="btn btn-light btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class='bx bx-zoom-in'></i>Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card rounded-0 product-card">
                                <div class="card-header bg-transparent border-bottom-0">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <a href="javascript:;">
                                            <div class="product-wishlist"> <i class='bx bx-heart'></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <a href="product-details.html">
                                    <img src="{{asset('Frontend/assets')}}/images/products/10.png" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <div class="product-info">
                                        <a href="javascript:;">
                                            <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                        </a>
                                        <a href="javascript:;">
                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
                                                <span class="text-white fs-5">$49.00</span>
                                            </div>
                                            <div class="cursor-pointer ms-auto"> <span>5.0</span> <i class="bx bxs-star text-white"></i>
                                            </div>
                                        </div>
                                        <div class="product-action mt-2">
                                            <div class="d-grid gap-2">
                                                <a href="javascript:;" class="btn btn-light btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class='bx bx-zoom-in'></i>Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card rounded-0 product-card">
                                <div class="card-header bg-transparent border-bottom-0">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <a href="javascript:;">
                                            <div class="product-wishlist"> <i class='bx bx-heart'></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <a href="product-details.html">
                                    <img src="{{asset('Frontend/assets')}}/images/products/11.png" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <div class="product-info">
                                        <a href="javascript:;">
                                            <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                        </a>
                                        <a href="javascript:;">
                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
                                                <span class="text-white fs-5">$49.00</span>
                                            </div>
                                            <div class="cursor-pointer ms-auto"> <span>4.9</span> <i class="bx bxs-star text-white"></i>
                                            </div>
                                        </div>
                                        <div class="product-action mt-2">
                                            <div class="d-grid gap-2">
                                                <a href="javascript:;" class="btn btn-light btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class='bx bx-zoom-in'></i>Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card rounded-0 product-card">
                                <div class="card-header bg-transparent border-bottom-0">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <a href="javascript:;">
                                            <div class="product-wishlist"> <i class='bx bx-heart'></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <a href="product-details.html">
                                    <img src="{{asset('Frontend/assets')}}/images/products/12.png" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <div class="product-info">
                                        <a href="javascript:;">
                                            <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                        </a>
                                        <a href="javascript:;">
                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
                                                <span class="text-white fs-5">$49.00</span>
                                            </div>
                                            <div class="cursor-pointer ms-auto"> <span>5.0</span> <i class="bx bxs-star text-white"></i>
                                            </div>
                                        </div>
                                        <div class="product-action mt-2">
                                            <div class="d-grid gap-2">
                                                <a href="javascript:;" class="btn btn-light btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class='bx bx-zoom-in'></i>Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card rounded-0 product-card">
                                <div class="card-header bg-transparent border-bottom-0">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <a href="javascript:;">
                                            <div class="product-wishlist"> <i class='bx bx-heart'></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <a href="product-details.html">
                                    <img src="{{asset('Frontend/assets')}}/images/products/13.png" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <div class="product-info">
                                        <a href="javascript:;">
                                            <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                        </a>
                                        <a href="javascript:;">
                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
                                                <span class="text-white fs-5">$49.00</span>
                                            </div>
                                            <div class="cursor-pointer ms-auto"> <span>3.9</span> <i class="bx bxs-star text-white"></i>
                                            </div>
                                        </div>
                                        <div class="product-action mt-2">
                                            <div class="d-grid gap-2">
                                                <a href="javascript:;" class="btn btn-light btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class='bx bx-zoom-in'></i>Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card rounded-0 product-card">
                                <div class="card-header bg-transparent border-bottom-0">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <a href="javascript:;">
                                            <div class="product-wishlist"> <i class='bx bx-heart'></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <a href="product-details.html">
                                    <img src="{{asset('Frontend/assets')}}/images/products/14.png" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <div class="product-info">
                                        <a href="javascript:;">
                                            <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                        </a>
                                        <a href="javascript:;">
                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
                                                <span class="text-white fs-5">$49.00</span>
                                            </div>
                                            <div class="cursor-pointer ms-auto"> <span>5.0</span> <i class="bx bxs-star text-white"></i>
                                            </div>
                                        </div>
                                        <div class="product-action mt-2">
                                            <div class="d-grid gap-2">
                                                <a href="javascript:;" class="btn btn-light btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class='bx bx-zoom-in'></i>Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card rounded-0 product-card">
                                <div class="card-header bg-transparent border-bottom-0">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <a href="javascript:;">
                                            <div class="product-wishlist"> <i class='bx bx-heart'></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <a href="product-details.html">
                                    <img src="{{asset('Frontend/assets')}}/images/products/15.png" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <div class="product-info">
                                        <a href="javascript:;">
                                            <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                        </a>
                                        <a href="javascript:;">
                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
                                                <span class="text-white fs-5">$49.00</span>
                                            </div>
                                            <div class="cursor-pointer ms-auto"> <span>5.0</span> <i class="bx bxs-star text-white"></i>
                                            </div>
                                        </div>
                                        <div class="product-action mt-2">
                                            <div class="d-grid gap-2">
                                                <a href="javascript:;" class="btn btn-light btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class='bx bx-zoom-in'></i>Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card rounded-0 product-card">
                                <div class="card-header bg-transparent border-bottom-0">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <a href="javascript:;">
                                            <div class="product-wishlist"> <i class='bx bx-heart'></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <a href="product-details.html">
                                    <img src="{{asset('Frontend/assets')}}/images/products/16.png" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <div class="product-info">
                                        <a href="javascript:;">
                                            <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                        </a>
                                        <a href="javascript:;">
                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
                                                <span class="text-white fs-5">$49.00</span>
                                            </div>
                                            <div class="cursor-pointer ms-auto"> <span>5.0</span> <i class="bx bxs-star text-white"></i>
                                            </div>
                                        </div>
                                        <div class="product-action mt-2">
                                            <div class="d-grid gap-2">
                                                <a href="javascript:;" class="btn btn-light btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class='bx bx-zoom-in'></i>Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card rounded-0 product-card">
                                <div class="card-header bg-transparent border-bottom-0">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <a href="javascript:;">
                                            <div class="product-wishlist"> <i class='bx bx-heart'></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <a href="product-details.html">
                                    <img src="{{asset('Frontend/assets')}}/images/products/17.png" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <div class="product-info">
                                        <a href="javascript:;">
                                            <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                        </a>
                                        <a href="javascript:;">
                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
                                                <span class="text-white fs-5">$49.00</span>
                                            </div>
                                            <div class="cursor-pointer ms-auto"> <span>4.0</span> <i class="bx bxs-star text-white"></i>
                                            </div>
                                        </div>
                                        <div class="product-action mt-2">
                                            <div class="d-grid gap-2">
                                                <a href="javascript:;" class="btn btn-light btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class='bx bx-zoom-in'></i>Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card rounded-0 product-card">
                                <div class="card-header bg-transparent border-bottom-0">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <a href="javascript:;">
                                            <div class="product-wishlist"> <i class='bx bx-heart'></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <a href="product-details.html">
                                    <img src="{{asset('Frontend/assets')}}/images/products/18.png" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <div class="product-info">
                                        <a href="javascript:;">
                                            <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                        </a>
                                        <a href="javascript:;">
                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
                                                <span class="text-white fs-5">$49.00</span>
                                            </div>
                                            <div class="cursor-pointer ms-auto"> <span>5.0</span> <i class="bx bxs-star text-white"></i>
                                            </div>
                                        </div>
                                        <div class="product-action mt-2">
                                            <div class="d-grid gap-2">
                                                <a href="javascript:;" class="btn btn-light btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class='bx bx-zoom-in'></i>Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card rounded-0 product-card">
                                <div class="card-header bg-transparent border-bottom-0">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <a href="javascript:;">
                                            <div class="product-wishlist"> <i class='bx bx-heart'></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <a href="product-details.html">
                                    <img src="{{asset('Frontend/assets')}}/images/products/19.png" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <div class="product-info">
                                        <a href="javascript:;">
                                            <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                        </a>
                                        <a href="javascript:;">
                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
                                                <span class="text-white fs-5">$49.00</span>
                                            </div>
                                            <div class="cursor-pointer ms-auto"> <span>4.5</span> <i class="bx bxs-star text-white"></i>
                                            </div>
                                        </div>
                                        <div class="product-action mt-2">
                                            <div class="d-grid gap-2">
                                                <a href="javascript:;" class="btn btn-light btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class='bx bx-zoom-in'></i>Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card rounded-0 product-card">
                                <div class="card-header bg-transparent border-bottom-0">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <a href="javascript:;">
                                            <div class="product-wishlist"> <i class='bx bx-heart'></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <a href="product-details.html">
                                    <img src="{{asset('Frontend/assets')}}/images/products/20.png" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <div class="product-info">
                                        <a href="javascript:;">
                                            <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                        </a>
                                        <a href="javascript:;">
                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
                                                <span class="text-white fs-5">$49.00</span>
                                            </div>
                                            <div class="cursor-pointer ms-auto"> <span>5.0</span> <i class="bx bxs-star text-white"></i>
                                            </div>
                                        </div>
                                        <div class="product-action mt-2">
                                            <div class="d-grid gap-2">
                                                <a href="javascript:;" class="btn btn-light btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class='bx bx-zoom-in'></i>Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--end New Arrivals-->

        <!--start brands-->
        <section class="py-4">
            <div class="container">
                <h3 class="d-none">Brands</h3>
                <div class="brand-grid">
                    <div class="brands-shops owl-carousel owl-theme border">
                        <div class="item border-end">
                            <div class="p-4">
                                <a href="javascript:;">
                                    <img src="{{ asset('Frontend/assets')}}/images/brands/01.png" class="img-fluid" alt="...">
                                </a>
                            </div>
                        </div>
                        <div class="item border-end">
                            <div class="p-4">
                                <a href="javascript:;">
                                    <img src="{{ asset('Frontend/assets')}}/images/brands/02.png" class="img-fluid" alt="...">
                                </a>
                            </div>
                        </div>
                        <div class="item border-end">
                            <div class="p-4">
                                <a href="javascript:;">
                                    <img src="{{ asset('Frontend/assets')}}/images/brands/03.png" class="img-fluid" alt="...">
                                </a>
                            </div>
                        </div>
                        <div class="item border-end">
                            <div class="p-4">
                                <a href="javascript:;">
                                    <img src="{{ asset('Frontend/assets')}}/images/brands/04.png" class="img-fluid" alt="...">
                                </a>
                            </div>
                        </div>
                        <div class="item border-end">
                            <div class="p-4">
                                <a href="javascript:;">
                                    <img src="{{ asset('Frontend/assets')}}/images/brands/05.png" class="img-fluid" alt="...">
                                </a>
                            </div>
                        </div>
                        <div class="item border-end">
                            <div class="p-4">
                                <a href="javascript:;">
                                    <img src="{{ asset('Frontend/assets')}}/images/brands/06.png" class="img-fluid" alt="...">
                                </a>
                            </div>
                        </div>
                        <div class="item border-end">
                            <div class="p-4">
                                <a href="javascript:;">
                                    <img src="{{ asset('Frontend/assets')}}/images/brands/07.png" class="img-fluid" alt="...">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--end brands-->



    </div>
</div>
<!--end page wrapper -->
@endsection
