<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequests;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequests;
use Illuminate\Support\Facades\Session;

class LoginAndRegister extends Controller
{
    public function createAccount(RegisterRequests $registerRequests, Accounts $accounts)
    {
        $requests = $registerRequests->validated();

        $requests['password'] = Hash::make($requests['password']);

        $accounts->create($requests);

        return to_route('login')->with('success', 'Registration Successfull!');
    }

    public function check(LoginRequests $loginRequests, Accounts $accounts)
    {
        $requests = $loginRequests->validated();

        $userAccount = $accounts->where('username', $requests['username'])->first();

        if (!$userAccount) return back()->with('error', 'The Username is not reflected to our End.');

        if (!Hash::check($requests['password'], $userAccount->password)) {
            return back()->with('error', 'The password does not match');
        }

        $loginRequests->session()->put('userLoggedIn', $userAccount->id);

        return to_route('users-index');
    }

    public function logout()
    {
        if (Session::has('userLoggedIn')) {
            Session::pull('userLoggedIn');

            return to_route('login');
        }
    }
}
