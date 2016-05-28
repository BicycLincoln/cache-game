<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <title>@section('title'){{ trans('app.title') }}@show</title>
    <meta name="description" content="@section('description'){{ trans('app.description') }}@show"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="theme-color" content="#009D39"/>
    {{--<link href="{{ canonical_url() }}" rel="canonical"/>--}}
    {{--@if(isset($og))--}}
        {{--@foreach($og as $key=>$value)--}}
            {{--<meta property="og:{{$key}}" content="{{ $value }}"/>--}}
        {{--@endforeach--}}
    {{--@else--}}
        {{--<meta property="og:title" content="@section('og:title'){{ trans('app.title') }}@show"/>--}}
        {{--<meta property="og:description" content="@section('og:description'){{ trans('app.description') }}@show"/>--}}
        {{--<meta property="og:image" content="@section('og:image'){{ asset('images/logo-facebook.png') }}@show"/>--}}
    {{--@endif--}}
    {{--<meta property="og:url" content="{{ Request::url() }}"/>--}}
    {{--<meta property="fb:app_id" content="{{ env('FACEBOOK_ID') }}"/>--}}
    {{--@foreach (config('app.facebook.admins') as $admin)--}}
        {{--<meta property="fb:admins" content="{{ $admin }}"/>--}}
    {{--@endforeach--}}
    {{--<link href="{{ asset('favicon.ico') }}" rel="shortcut icon"/>--}}
    {{--<link href="{{ asset('apple-touch-icon.png') }}" rel="icon" sizes="144x144"/>--}}
    {{--<link href="{{ asset('apple-touch-icon.png') }}" rel="apple-touch-icon" sizes="144x144"/>--}}
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
    @yield('styles-head')
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    @yield('scripts-head')
</head>
<body data-route="{{ Route::currentRouteName() }}">
@yield('scripts-open')
<header id="header">
    @yield('header')
</header>
@yield('navigation')
<div id="content">
    @yield('body')
</div>
@yield('newsStories')
<footer id="footer">
    @yield('footer')
</footer>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
@yield('scripts-foot')
</body>
</html>
