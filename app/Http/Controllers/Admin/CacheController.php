<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;

class CacheController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndex()
    {
        return view('admin.index');
    }

    public function getCreate()
    {
        return view('admin.caches.create');
    }

    public function getEdit($id)
    {
        return view('admin.caches.edit');
    }

    public function postSave()
    {

    }
}
