<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PublicController extends Controller
{
    public function __construct()
    {

    }

    public function getIndex()
    {
        return view('index');
    }

    public function getCache($id)
    {
        return view('cache.index');
    }

    public function getClaim($code)
    {
        return view('claim.index');
    }

    public function postClaim($code)
    {

    }

    public function anyRobots()
    {
        return view('robots');
    }
}
