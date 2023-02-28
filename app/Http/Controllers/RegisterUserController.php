<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;

class RegisterUserController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        $this->validate($request, [
            'username' => 'required|string',
            'email' => 'required|unique:users|email',
            'password' => 'required|string|min:8',
            'password-validate' => 'required|same:password'
        ]);

        $credentials = $request->only(['username', 'email', 'password', 'password-validate']);

        $user = new User();
        $user->name = $credentials['username'];
        $user->email = $credentials['email'];
        $user->password = Hash::make($credentials['password']);

        $user->save();
        return Redirect::to('/');
    }
}
