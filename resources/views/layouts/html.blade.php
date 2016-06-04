<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <title>@section('title'){{ trans('app.title') }}@show</title>
    <meta name="description" content="@section('description'){{ trans('app.description') }}@show"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="{{ asset('/favicon/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#FFFFFF"/>
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
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
    @yield('styles-head')
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
    &copy;{{ config('app.launch') . (date('Y') != config('app.launch') ? '-' . date('y') : '') }}
    <a href="http://www.bicyclincoln.org/">BicycLincoln</a>
</footer>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
@yield('scripts-foot')
</body>
</html>
