<?php

namespace App\Http\Controllers;

use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    private UserRepositoryInterface $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function create(Request $request)
    {
        $user = $this->userRepository->create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'user_email' => $request->user_email,
            'password' => $request->password,
        ]);

        if ($user)
            return back()->with(['massage' => 'ثبت نام شما با موفقیت انجام شد']);
    }
}
