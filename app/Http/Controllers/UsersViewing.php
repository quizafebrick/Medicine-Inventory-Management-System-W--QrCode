<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use App\Models\Medicine;
use Illuminate\Http\Request;

class UsersViewing extends Controller
{
    public function index(Accounts $accounts, Medicine $medicine)
    {
        // * CURRENTLY EMAIL SESSION BY USER
        $userLoggedIn = ['userLoggedIn' => $accounts->where('id', session('userLoggedIn'))->first()];
        $getMedicine = $medicine->get();

        return view('users.index', $userLoggedIn, compact('getMedicine'));
    }
}
