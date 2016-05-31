@extends('layouts.html')

@section('styles-head')
    <link rel="stylesheet" href="{{ asset('/css/admin.min.css') }}"/>
@append

@section('scripts-foot')
    <script type="text/javascript" src="{{ asset('/js/admin.min.js') }}"></script>
@append