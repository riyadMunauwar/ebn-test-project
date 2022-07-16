@extends('layouts.master')


@section('metatags')
    <title>{{ config('app.name', 'Laravel') }}</title>
@endsection


@section('header')
    @include('sections.header')
@endsection


@section('main')
    <div class="user-dashboard mt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <ul class="list-group">
                        <li class=""><a href="" class="list-group-item">Order</a></li>
                        <li class=""><a href="" class="list-group-item">Wish list</a></li>
                        <li class=""><a href="" class="list-group-item">Tracking Order</a></li>
                        <li class=""><a href="" class="list-group-item">My Review</a></li>
                        <li class=""><a href="" class="list-group-item">Cancelling and return order</a></li>
                        <li class=""><a href="" class="list-group-item">Account manage and settings</a></li>
                        @if (isset($store))
                            <li class=""><a href="/store/dashboard" class="list-group-item">Go to store</a></li>
                        @else
                            <li class=""><a href="/store/create" class="list-group-item">Create a store</a></li>
                        @endif
                    </ul>
                </div>
                <div class="col-md-7 mt-4">
                    @include('sections.underConstruction')
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <!-- @include('sections.footer') -->
@endsection
