<?php

namespace App\Http\Controllers\Admin;

use App\Cache;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class CacheController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndex()
    {
        $caches = Cache::withTrashed()
            ->orderByRaw('`deleted_at` IS NOT NULL asc')
            ->orderBy('name', 'asc')
            ->get();

        $with = [
            'caches' => $caches
        ];

        return view('admin.caches.index', $with);
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
