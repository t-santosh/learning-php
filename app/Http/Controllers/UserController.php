<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index(){
        return view('users.index');
    }
    public function login() {
        return view('users.login');
    }

    // lets start validating the admin credential inputs and redirect to the 
    // admin dashboard panel
    public function auth(Request $request) {

        // perform the validation of admin inputs 
        $validation = $request->validate(
            [
                'email' => 'email',
                'password' => 'required'
            ]);

        // storing the input value of user into temporary variable
        // in order to find or compare with the values in database
        $entered_email = $request->input('email');
        $entered_password = $request->input('password');

        $user = UserModel::where('email', $entered_email)->first();
        
        if(!empty($user)) {
            if($user->password == $entered_password && $user->role == 'admin') {
                return view('users.home');
            } else {
                Session::flash('autherror', 'Incorrect Credentials');
                return redirect()->route('login-page');
            } 
        }else {
            Session::flash('autherror', 'Incorrect credentials');
            return redirect()->route('login-page');
        }

    }

}
