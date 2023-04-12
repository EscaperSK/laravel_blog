<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth/register');
    }

    public function store(RegisterUserRequest $request)
    {
        $data = $request->validated();

        $data['password'] = Hash::make($data['password']);

        $new_user = User::create($data);

        $new_user->assignRole('default');

        Auth::login($new_user);
        return redirect()->route('posts.index');
    }
}
