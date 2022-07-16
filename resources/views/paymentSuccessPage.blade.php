@extends('layouts.master')


@section('metatags')
    <title>{{ config('app.name', 'Laravel') }}</title>
@endsection


@section('header')
    @include('sections.header')
@endsection


@section('main')
    <div class="container py-5 my-5">
        <div class="d-flex flex-column align-items-center justify-content-center">
            <img src="{{ asset('static/success.gif') }}" alt="" class="img-fluid w-25">
            <p class="h3">Dear customer your payment is successfull</p>
            <p class="lead">Transaction ID : {{ isset($transaction_id) }}</p>
            <p class="lead">Amount : {{ isset($amount) }} Tk</p>
            <a href="/" class="btn btn-primary">Go back to shoping</a>
        </div>
    </div>
@endsection

@section('footer')
    @include('sections.footer')
@endsection
