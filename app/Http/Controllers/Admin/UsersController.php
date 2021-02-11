<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Admin\User as UserResource;

class UsersController extends Controller
{
    public function show($id)
    {
        $user = User::where('id', $id)->with('address.state')->first();

        return new UserResource($user);
    }
}
