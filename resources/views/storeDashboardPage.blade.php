@extends('layouts.master')


@section('metatags')
    <title>{{ config('app.name', 'Laravel') }}</title>
@endsection


@section('header')
    @include('sections.header')
@endsection


@section('main')
    <div class="store-dashboard mt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <ul class="list-group">
                        <li class=""><a href="" class="list-group-item">Visit Store</a></li>
                        <li class=""><a href="" class="list-group-item">Product</a></li>
                        <li class=""><a href="" class="list-group-item">Category</a></li>
                        <li class=""><a href="" class="list-group-item">Brand</a></li>
                        <li class=""><a href="" class="list-group-item">Caurosel</a></li>
                        <li class=""><a href="" class="list-group-item">Product caurosel</a></li>
                        <li class=""><a href="" class="list-group-item">Orders</a></li>
                        <li class=""><a href="" class="list-group-item">Report</a></li>
                        <li class=""><a href="" class="list-group-item">Comments</a></li>
                        <li class=""><a href="" class="list-group-item">Store Reviews</a></li>
                        <li class=""><a href="" class="list-group-item">Settings</a></li>
                    </ul>
                </div>
                <div class="col-md-9 mt-4">
                    @include('sections.underConstruction')
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <!-- @include('sections.footer') -->
@endsection
