<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function list(Request $request)
    {
        $userQuery = User::query();

        $userQuery->where('email', 'like', $request->get('keyword'))
            ->orWhere('full_name', 'like', $request->get('keyword'))
            ->orWhere('mobile', 'like', $request->get('keyword'))
            ->orderBy('point');

        $users = $userQuery->get();
    }
}
