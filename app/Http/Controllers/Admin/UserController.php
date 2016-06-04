<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndex()
    {
        $users = User::withTrashed()
            ->orderBy('first_name', 'asc')
            ->orderBy('last_name', 'asc')
            ->get();

        $with = [
            'users' => $users
        ];

        return view('admin.users.index', $with);
    }

    public function getCreate()
    {
        return view('admin.users.create');
    }

    public function getEdit($id)
    {
        return view('admin.users.edit');
    }

    public function postSave()
    {

    }
}
