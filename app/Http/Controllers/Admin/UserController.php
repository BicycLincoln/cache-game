<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        return view('admin.users.index');
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