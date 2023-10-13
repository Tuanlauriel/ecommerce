@extends('layouts.customer')

@section('title', 'Shopping')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@stop

@section('content')
    <main style="height: 3000px">
        <section class="banner-section mb-3">
            <div class="container p-0 pt-3">
                <div class="d-flex">
                    <div class="me-1">
                        <a href="">
                            <img src="{{ asset('images/banner/vn-50009109-c9ee5b97e7e46c7373f9294a14bae1ba_xxhdpi.jpg') }}" alt="banner" height="300px">
                        </a>
                    </div>
                    <div>
                        <div>
                            <a href="">
                                <img src="{{ asset('images/banner/vn-50009109-07c83536bbd3c477aa77c5c9f42ca942_xhdpi.jpg') }}" alt="banner" height="150px">
                            </a>
                        </div>
                        <div>
                            <a href="">
                                <img src="{{ asset('images/banner/vn-50009109-22c40e7abefa9213e07608a71706c73b_xhdpi.jpg') }}" alt="banner" height="150px">
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
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <a href="" class="category-link">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('images/categories/687f3967b7c2fe6a134a2c11894eea4b_tn.png') }}" alt="image">
                                <div class="card-body">
                                    <h6 class="card-title text-center">Men Clothes</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <a href="" class="category-link">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('images/categories/31234a27876fb89cd522d7e3db1ba5ca_tn.png') }}" alt="image">
                                <div class="card-body">
                                    <h6 class="card-title text-center">Mobile & Gadgets</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <a href="" class="category-link">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('images/categories/978b9e4cb61c611aaaf58664fae133c5_tn.png') }}" alt="image">
                                <div class="card-body">
                                    <h6 class="card-title text-center category-name">Consumer Electronics</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <a href="" class="category-link">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('images/categories/c3f3edfaa9f6dafc4825b77d8449999d_tn.png') }}" alt="image">
                                <div class="card-body">
                                    <h6 class="card-title text-center category-name">Computer & Accessories</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <a href="" class="category-link">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('images/categories/ec14dd4fc238e676e43be2a911414d4d_tn.png') }}" alt="image">
                                <div class="card-body">
                                    <h6 class="card-title text-center category-name">Cameras</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <a href="" class="category-link">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('images/categories/74ca517e1fa74dc4d974e5d03c3139de_tn.png') }}" alt="image">
                                <div class="card-body">
                                    <h6 class="card-title text-center category-name">Men Shoes</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <a href="" class="category-link">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('images/categories/48630b7c76a7b62bc070c9e227097847_tn.png') }}" alt="image">
                                <div class="card-body">
                                    <h6 class="card-title text-center category-name">Women Shoes</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <a href="" class="category-link">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('images/categories/7abfbfee3c4844652b4a8245e473d857_tn.png') }}" alt="image">
                                <div class="card-body">
                                    <h6 class="card-title text-center category-name">Home Appliances</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <a href="" class="category-link">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('images/categories/ef1f336ecc6f97b790d5aae9916dcb72_tn.png') }}" alt="image">
                                <div class="card-body">
                                    <h6 class="card-title text-center category-name">Beauty</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <a href="" class="category-link">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('images/categories/18fd9d878ad946db2f1bf4e33760c86f_tn.png') }}" alt="image">
                                <div class="card-body">
                                    <h6 class="card-title text-center category-name">Men Bags</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <a href="" class="category-link">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('images/categories/ce8f8abc726cafff671d0e5311caa684_tn.png') }}" alt="image">
                                <div class="card-body">
                                    <h6 class="card-title text-center category-name">Toys</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <a href="" class="category-link">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('images/categories/cdf21b1bf4bfff257efe29054ecea1ec_tn.png') }}" alt="image">
                                <div class="card-body">
                                    <h6 class="card-title text-center category-name">Pets</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="categories-section">
            <div class="container p-3" style="background-color: #ffffff">
                <h3 class="section-title">Products</h3>
                <hr>
                <div class="row g-3">
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <a href="" class="product-link">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('images/products/vn-11134207-7r98o-llm05p5nkerg1c_tn.jpg') }}" alt="image">
                                <div class="card-body">
                                    <div class="product-name">Điện thoại Apple iPhone 15 128GB</div>
                                    <div class="star-container">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <span> 185 sold</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>22.999.000₫</div>
                                        <div style="border-radius: 50%; background-color: #ff2600; color: #ffffff; padding: 6px"><i class="fa-solid fa-cart-plus"></i></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <a href="" class="product-link">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('images/products/93b3f6d4799b06f9279f817540daa4d1_tn.jpg') }}" alt="image">
                                <div class="card-body">
                                    <div class="product-name">Điện thoại Apple iPhone 14 Pro Max 128GB</div>
                                    <div class="star-container">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <span> 17k sold</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>27.090.000₫</div>
                                        <div style="border-radius: 50%; background-color: #ff2600; color: #ffffff; padding: 6px"><i class="fa-solid fa-cart-plus"></i></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <a href="" class="product-link">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('images/products/vn-11134207-7r98o-llmxuaiztz98f6_tn.jpg') }}" alt="image">
                                <div class="card-body">
                                    <div class="product-name">Apple iPhone 15 Pro 256GB Chính hãng VN/A</div>
                                    <div class="star-container">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <span> 7 sold</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>31.990.000₫</div>
                                        <div style="border-radius: 50%; background-color: #ff2600; color: #ffffff; padding: 6px"><i class="fa-solid fa-cart-plus"></i></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <a href="" class="product-link">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('images/products/a5e087409cca78fb6bdd281da177ff88_tn.jpg') }}" alt="image">
                                <div class="card-body">
                                    <div class="product-name">Máy tính xách tay Apple Macbook Pro (2022) M2 chip, 13.3 inches, 8GB, 256GB SSD</div>
                                    <div class="star-container">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <span> 152 sold</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>28.950.000₫</div>
                                        <div style="border-radius: 50%; background-color: #ff2600; color: #ffffff; padding: 6px"><i class="fa-solid fa-cart-plus"></i></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <a href="" class="product-link">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('images/products/vn-11134207-7r98o-llxdjz3koonz50_tn.jpg') }}" alt="image">
                                <div class="card-body">
                                    <div class="product-name">Máy tính xách tay/ Laptop Asus ROG Strix G G513RC-HN038W (AMD Ryzen 7 6800HS) (Xám) - Bảo hành 24 tháng</div>
                                    <div class="star-container">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <span> 6 sold</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>21.990.000₫</div>
                                        <div style="border-radius: 50%; background-color: #ff2600; color: #ffffff; padding: 6px"><i class="fa-solid fa-cart-plus"></i></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <a href="" class="product-link">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('images/products/vn-11134207-7r98o-lmna1ev5tbz305_tn.jpg') }}" alt="image">
                                <div class="card-body">
                                    <div class="product-name">Son Tint Bóng VACOSI Glossy Lip Tint - Căng Mọng Môi & Bền Màu</div>
                                    <div class="star-container">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <span> 327 sold</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>260.000₫</div>
                                        <div style="border-radius: 50%; background-color: #ff2600; color: #ffffff; padding: 6px"><i class="fa-solid fa-cart-plus"></i></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@stop
