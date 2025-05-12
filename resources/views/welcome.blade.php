{{-- this code to link with master page --}}
@extends('layouts.master')

@section('content')
    
<!-- start section  one -->
<div class="product-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">	
                    <h3><span class="orange-text">اقسام </span> الموقع</h3>
                    <p>متعة التسوق عبر موقعنا</p>
                </div>
            </div>
        </div>
<!-- end section two -->

{{-- start section two --}}
       <div class="row">
        {{-- foreach to give data from database --}}
        @foreach ($categories as $item)
        <div class="col-lg-4 col-md-6 text-center">
            <div class="single-product-item">
                <div class="product-image">
                    <a href="/product/{{$item->id}}"><img src="{{asset($item -> imagepath)}}" 
                        style="min-width: 250px !important ; min-height: 300px !important ;"
                         alt=""></a>
                </div>
                <h3>{{$item -> name}}</h3>
                <p>{{ $item -> description }} </p>
            </div>
        </div>
        @endforeach
        </div>
    </div>
</div>
<!-- end section two -->




@endsection