<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use Illuminate\Http\Request;

class UsersViewing extends Controller
{
    public function index(Accounts $accounts)
    {
        // * CURRENTLY EMAIL SESSION BY USER
        $userLoggedIn = ['userLoggedIn' => $accounts->where('id', session('userLoggedIn'))->first()];

        return view('users.index', $userLoggedIn);
    }
}
