<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class ProfileController extends Controller
{

    public function edit()
    {
        return view('profile.edit');
    }

    public function update(Request $request)
    {
        return $request;
    }
}
