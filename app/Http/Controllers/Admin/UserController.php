<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserSaveRequest;
use App\User;
use DB;
use Hash;
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
            ->orderByRaw('`deleted_at` IS NOT NULL asc')
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
        $user = new User();
        return view('admin.users.create', ['user' => $user]);
    }

    public function getEdit($id)
    {
        $user = User::find($id);
        if (empty($user)) {
            abort(404);
        }
        return view('admin.users.edit', ['user' => $user]);
    }

    public function postSave(UserSaveRequest $request)
    {
        // get the id
        $id = $request->get('id');

        // get the user object to edit / new user object to create
        $user = new User();
        if ($id) {
            $user = User::find($id);
            if (empty($user)) {
                abort(404);
            }
        }

        DB::transaction(function () use (&$request, &$user) {
            // set stuff
            $user->first_name = trim($request->get('first_name'));
            $user->middle_name = trim($request->get('middle_name')) ?: null;
            $user->last_name = trim($request->get('last_name'));
            $user->email = trim($request->get('email'));
            if ($request->get('password')) {
                $user->password = Hash::make($request->get('password'));
            }
            $user->save();
        });

        return redirect()
            ->route('admin.users.edit.get', ['id' => $user->id])
            ->with('success', $user->full_name . ' saved successfully.');
    }
}
