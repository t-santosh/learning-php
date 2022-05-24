<?php

namespace App\Http\Controllers;
use App\Models\UserModel;
use App\Models\Posts;
use App\Models\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    /**
     * Log out account user.
     *
     * @return \Illuminate\Routing\Redirector
     */
    public function perform()
    {
        Session::flush();
        
        Auth::logout();

        return redirect()->route('login-page');;
    }
}