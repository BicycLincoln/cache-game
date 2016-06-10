@extends('layouts.admin')

@section('header')
    @include('admin.includes.navigation')
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="page-header">
                    Caches
                    <a class="btn btn-primary" href="{{ route('admin.caches.create.get') }}">Add Cache</a>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                @if(count($caches) > 0)
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th class="hidden-xs">Email</th>
                            <th class="hidden-xs hidden-sm">Last Active</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($caches as $cache)
                            <tr class="{{ $cache->deleted_at ? 'deleted' : '' }}">
                                <td>
                                    {{ $cache->name }}
                                </td>
                                <td>
                                    <a class="btn btn-primary btn-xs pull-right"
                                       href="{{ route('admin.caches.edit.get.edit.get', ['id' => $cache->id]) }}"
                                    >
                                        Edit
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="alert alert-info">There are currently no caches in the system.</div>
                @endif
            </div>
        </div>
    </div>
@endsection