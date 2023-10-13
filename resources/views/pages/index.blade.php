@extends('layouts.customer')

@section('title', 'Shopping')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@stop

@section('content')
    <main style="height: 3000px">
        <section class="categories-section">
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
                                    <h6 class="card-title text-center category-name">Computer & <Accessories></Accessories></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@stop
