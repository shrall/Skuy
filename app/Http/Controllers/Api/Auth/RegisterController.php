<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = $this->newUser($request->all());


        if (empty($user)) {
            return response([
                'message' => 'Failed to create account.'
            ]);
        } else {
            // note harus ada event ini biar ngetrigger email verifynya
            event(new Registered($user));
            return response([
                'message' => 'Account created.'
            ]);
        }
    }
    private function newUser(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
