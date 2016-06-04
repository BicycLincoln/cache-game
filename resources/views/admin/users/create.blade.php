@extends('layouts.admin')

@section('header')
    @include('admin.includes.navigation')
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="page-header">
                    <a href="{{ route('admin.users.index.get') }}">Users</a>
                    <small>Create User</small>
                </h1>
            </div>
        </div>
        @include('includes.success')
        <div class="row">
            <div class="col-xs-12">
                <form class="form" action="{{ route('admin.users.save.post') }}" method="post">
                    @include('admin.users.includes.form')
                    <button class="btn btn-primary" type="submit">Create User</button>
                    <a class="btn btn-default" href="{{ route('admin.users.index.get')  }}">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection