@extends('layouts.master')


@section('metatags')
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta property="og:title" content="Ebn Shop | Your trusted online shop" />
    <meta property="og:description" content="this is content" />
    <meta property="og:" content="" />
    <meta property="og:" content="" />
    <meta property="og:" content="" />
@endsection


@section('header')
    @include('sections.header')
@endsection


@section('main')
    @include('sections.homeBanner')

    <div class="store my-5">
        <div class="container">
            <div class="row justify-content-center">
                <h5 class="text-warning display-6 mb-4">Your nearest store</h5>
                @foreach( $stores as $store)
                    <div class="col-md-3 m-2 border">
                        <a href="/{{ $store->slug }}">
                            <figure class="figure">
                                <img src="https://static-01.daraz.com.bd/p/60682626d1382592b97e7d219259871d.jpg" class="figure-img img-fluid rounded" alt="...">
                                <figcaption class="figure-caption text-center">{{ $store->name }}</figcaption>
                                <span class="mt-2 text-center d-block small">{{ $store->district }}</span>
                            </figure>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('sections.footer')
@endsection