@extends('layouts.master')


@section('metatags')
    <title>{{ config('app.name', 'Laravel') }}</title>
@endsection


@section('header')
    @include('sections.header')
@endsection


@section('main')
    <div class="show-single-product mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ $product->thumbnail }}" alt="" class="img-fluid rounded">
                    <div class="row mt-3">
                        <div class="col">
                             <img src="https://static-01.daraz.com.bd/p/262f86bab2936fa55f8b118a1216cf13.jpg" alt="" class="img-fluid rounded" />
                        </div>
                        <div class="col">
                             <img src="https://static-01.daraz.com.bd/p/262f86bab2936fa55f8b118a1216cf13.jpg" alt="" class="img-fluid rounded" />
                        </div>
                        <div class="col">
                             <img src="https://static-01.daraz.com.bd/p/262f86bab2936fa55f8b118a1216cf13.jpg" alt="" class="img-fluid rounded" />
                        </div>
                        <div class="col">
                             <img src="https://static-01.daraz.com.bd/p/262f86bab2936fa55f8b118a1216cf13.jpg" alt="" class="img-fluid rounded" />
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h2 class="lead text-primary fw-bold">{{ $product->name }}</h2>
                    <h6 class="mt-2">Product ID :  {{ $product->id }}</h6>

                    <h4 class="mt-5 text-warning display-3">{{ $product->price }} Tk</h4>
                    <small class="mt-4 text-success">In Stock -> {{ $product->stock}}</small>
                    <small class="mt-2 d-block text-info">Only 15 days left.</small>
                    <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. In culpa earum iusto animi temporibus. Voluptate sapiente nihil laborum asperiores voluptatum?</p>

                    <a href="/checkout" class="btn btn-info">Add to cart</a>
                    <a href="" class="btn btn-warning">Add to wish</a>
                    <small class="d-block mt-3">Category: Gadget</small>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <!-- @include('sections.footer') -->
@endsection
