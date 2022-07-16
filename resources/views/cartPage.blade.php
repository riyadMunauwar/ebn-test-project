@extends('layouts.master')


@section('metatags')
    <title>{{ config('app.name', 'Laravel') }}</title>
@endsection


@section('header')
    @include('sections.homeHeader')
@endsection


@section('main')
    
@endsection

@section('footer')
    @include('sections.footer')
@endsection
