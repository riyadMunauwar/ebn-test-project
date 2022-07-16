@extends('layouts.master')


@section('metatags')
    <title>{{ config('app.name', 'Laravel') }}</title>
@endsection


@section('header')
    @include('sections.storeHeader')
@endsection


@section('main')
    @include('sections.storeBanner')

    <!-- Product Caurosel -->
    <div class="product-caurosel mt-4">
        <div class="container">
            <p class="lead">Buy from your nearest shop</p>
            <div class="slider-1234">
                @for ($i = 0; $i < 10; $i++)
                    <div class="slider-item p-2">
                        <div class="card">
                            <div class="d-flex justify-content-center">
                                <img class="img-fluid w-50" src="https://static-01.daraz.com.bd/p/838dd6c58f372398a8d280511255fe0f.jpg" alt="">
                            </div>
                            <small class="mt-4 text-center mb-3 text-primary">this is title</small>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
    <script>
        (function(Slick){

            Slick('.slider-1234').slick({
                centerMode: true,
                centerPadding: '60px',
                slidesToShow: 6,
                speed: 1000,
                autoplay: true,
                infinite: true,
                responsive: [
                    {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 3
                    }
                    },
                    {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                    }
                ]
            });


        })($)

    </script>


    <div class="product-showcase my-5">
        <div class="container">
            <h1 class="lead mb-3">Feature products</h1>
            <div class="row" >
                @foreach( $products as $product)
                    <div class="col-md-3">
                        <figure class="figure">
                            <img src="{{ $product->thumbnail}}" class="figure-img img-fluid rounded" alt="...">
                            <a class="d-block mt-3 text-decoration-none small" href="{{ url('product/' . $product->id ) }}" >{{ $product->name }}</a>
                            <p class="lead mt-2 text-danger">{{ $product->price }} Tk</p>
                            <a href="" class="btn btn-small btn-info">Add to cart</a>
                        </figure>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('sections.footer')
@endsection


