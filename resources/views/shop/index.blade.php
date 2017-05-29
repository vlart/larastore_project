@extends('layouts.master')

@section('title')
    Laravel Store
@endsection

@section('content')
    <main class="main">
        <h4 class="section-heading">TRENDING</h4>
        @foreach($products as $product)
        <div class="_1-4-product-card">
            <a class="link-block w-inline-block" href="#"><img class="product-card-image" sizes="(max-width: 479px) 43vw, (max-width: 767px) 44vw, (max-width: 991px) 29vw, 215.59375px" src="{{$product->imagePath}}" >
            </a>
            <div class="product-info-block">
                <div class="product-desc-block"><a class="product-name" href="#">{{$product->title}}</a>
                    <div class="like-block">
                        <div class="like-count">238</div>
                        <a class="like-link-block w-inline-block" href="#"><img class="star-img" src="images/star-sign.svg" width="30">
                        </a>
                    </div>
                </div>
                <div class="some-action">
                    <div class="product-price">{{$product->price}}$</div><a class="add-to-cart-btn w-button" href="#">add to cart</a>
                </div>
            </div>
        </div>
        @endforeach
    </main>
@endsection
{{--smth--}}