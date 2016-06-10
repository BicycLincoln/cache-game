@extends('layouts.admin')

@section('header')
    @include('admin.includes.navigation')
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="page-header">
                    Users
                    <a class="btn btn-primary" href="{{ route('admin.users.create.get') }}">Create User</a>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                @if(count($users) > 0)
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
                        @foreach($users as $user)
                            <tr class="{{ $user->deleted_at ? 'deleted' : '' }}">
                                <td>
                                    {{ $user->full_name }}
                                </td>
                                <td class="hidden-xs">
                                    <a href="mailto:{{ $user->email }}">
                                        {{ $user->email }}
                                    </a>
                                </td>
                                <td class="hidden-xs hidden-sm">
                                    {{ $user->online_at ?: 'N/A' }}
                                </td>
                                <td>
                                    <a class="btn btn-primary btn-xs pull-right"
                                       href="{{ route('admin.users.edit.get', ['id' => $user->id]) }}"
                                    >
                                        Edit
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="alert alert-info">There are currently no usersgit  in the system.</div>
                @endif
            </div>
        </div>
    </div>
@endsection