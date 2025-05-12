@extends('layouts.master')

@section('content')


<!-- start section  one -->
<div class="product-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">	
                    <h3><span class="orange-text">Our</span> Products</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.</p>
                </div>
            </div>
        </div>
<!-- end section one -->

{{-- start section two --}}
        <div class="row">
            {{-- foreach to give data from database --}}
            @foreach ($products as $item)
            <div class="col-lg-4 col-md-6 text-center">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="single-product.html"><img src="{{asset($item -> imagepath)}}"
                             style="min-width: 150px !important ; min-height: 300px !important ;"
                             alt=""></a>
                    </div>
                    <h3>{{$item -> name}}</h3>
                    <p>{{ $item -> description}} </p>
                    <p class="product-price"><span>{{$item -> quantity}}</span>{{ $item -> price }} $ </p>
                    <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
            @endforeach    
        </div>
    </div>
</div>
<!-- end section two -->



@endsection