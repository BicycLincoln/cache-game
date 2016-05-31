@extends('layouts.html')

@section('styles-head')
    <link rel="stylesheet" href="{{ asset('/css/public.min.css') }}"/>
@append

@section('scripts-foot')
    <script type="text/javascript" src="{{ asset('/js/public.min.js') }}"></script>
@append