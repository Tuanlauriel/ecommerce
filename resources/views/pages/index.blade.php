@extends('layouts.customer')

@section('title', 'Shopping')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@stop

@section('content')
    <main style="height: 3000px">
        <section class="banner-section mb-3">
            <div class="container p-3">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-8 p-0">
                        <div>
                            <swiper-container>
                                <swiper-slide>
                                    <a href="">
                                        <img src="{{ asset('images/banner/vn-50009109-c9ee5b97e7e46c7373f9294a14bae1ba_xxhdpi.jpg') }}" alt="banner" width="100%">
                                    </a>
                                </swiper-slide>
                                <swiper-slide>
                                    <a href="">
                                        <img src="{{ asset('images/banner/vn-50009109-28974988fd9d51ffa4bd6f8f55b0b0a2_xxhdpi.jpg') }}" alt="banner" width="100%">
                                    </a>
                                </swiper-slide>
                                <swiper-slide>
                                    <a href="">
                                        <img src="{{ asset('images/banner/vn-50009109-3e20388bdf54823fbec09dd4621be8cc_xxhdpi.png') }}" alt="banner" width="100%">
                                    </a></swiper-slide>
                                <swiper-slide>
                                    <a href="">
                                        <img src="{{ asset('images/banner/vn-50009109-f9d5f256904e54bcd10b0da3bf4ff7ca_xxhdpi.jpg') }}" alt="banner" width="100%">
                                    </a>
                                </swiper-slide>
                            </swiper-container>
                        </div>
                    </div>
                    <div class="d-none d-lg-block col-lg-4" style="padding: 0 0 0 .5rem">
                        <div>
                            <a href="">
                                <img src="{{ asset('images/banner/vn-50009109-07c83536bbd3c477aa77c5c9f42ca942_xhdpi.jpg') }}" alt="banner" width="100%">
                            </a>
                        </div>
                        <span class="d-block py-1"></span>
                        <div>
                            <a href="">
                                <img src="{{ asset('images/banner/vn-50009109-22c40e7abefa9213e07608a71706c73b_xhdpi.jpg') }}" alt="banner" width="100%">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="categories-section mb-3">
            <div class="container p-3" style="background-color: #ffffff">
                <h3 class="section-title">Categories</h3>
                <hr>
                <div class="row g-3">
                    @foreach($categories as $category)
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                            <a href="" class="category-link">
                                <div class="card">
                                    <img class="card-img-top" src="{{ $category->category_image }}" alt="image">
                                    <div class="card-body">
                                        <h6 class="card-title text-center">{{ $category->category_name }}</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="categories-section">
            <div class="container p-3" style="background-color: #ffffff">
                <h3 class="section-title">Products</h3>
                <hr>
                <div class="row g-3">
                    @foreach($products as $product)
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                            <a href="" class="product-link">
                                <div class="card">
                                    <img class="card-img-top" src="{{ $product->product_image }}" alt="image">
                                    <div class="card-body">
                                        <div class="product-name">{{ $product->product_name }}</div>
                                        <div class="star-container">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <span> 185 sold</span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>{{ number_format($product->product_price, 0, ',', '.') }}₫</div>
                                            <div style="border-radius: 50%; background-color: #ff2600; color: #ffffff; padding: 6px"><i class="fa-solid fa-cart-plus"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@stop

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>
@stop
