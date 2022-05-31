<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Session;
use Illuminate\support\Facades\Hash;

class UserController extends Controller
{
    // landing Page ---
    public function index()
    {
        return view('users.index');
    }
    // --- /.landing Page

    //  login validation ---
    public function login()
    {
        return view('users.login');
    }
    public function auth_login(Request $request)
    {

        // perform the validation of admin inputs 
        $validation = $request->validate(
            [
                'email' => 'email',
                'password' => 'required'
            ]
        );

        // storing the input value of user into temporary variable
        // in order to find or compare with the values in database
        $entered_email = $request->input('email');
        $entered_password = $request->input('password');

        $authuser = UserModel::where('email', $entered_email)->first();
        if (!empty($authuser)) {
            $dbpassword = $authuser->password;
            if ($entered_password == $dbpassword) {
                return view('users.home');
            } else {
                Session::flash('autherror', 'Incorrect Credentials');
                return redirect()->route('login-page');
            }
        } else {
            Session::flash('autherror', 'Incorrect credentials');
            return redirect()->route('login-page');
        }
    }
    // --- /.login validation

    public function dashboard_landing_page() {
        return view('users.home');
    }

    // register page --- 
    public function register()
    {
        return view('users.register');
    }
    //  --- /.register Page

    // Store the register form data ---
    public function auth_register(Request $request)
    {

        // validation ---
        $validation = $request->validate(
            [
                'first-name' => 'required|max:100',
                'last-name' => 'required|max:100',
                'email' => 'required',
                'password' => 'required|min:6|confirmed',
                'address' => 'required|max:100',
                'city' => 'required|max:100',
                'state' => 'required|max:100',
                'zip' => 'required|max:100',
            ]
        );

        // instance of user model is created
        $user = new UserModel();
        // insert the data into database field
        $user->first_name = $request->input('first-name');
        $user->last_name = $request->input('last-name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->address = $request->input('address');
        $user->city = $request->input('city');
        $user->state = $request->input('state');
        $user->zip = $request->input('zip');

        if ($user->save()) {
            Session::flash('message', 'You have successfully registered.');
            return redirect()->route('register-page');
        };
    }

    // --- /.register form data 

    public function users_list() {
        $users = UserModel::all();
        return view('users.users', ['users'=>$users]);
    }

    public function edit($id) {
        $user = UserModel::find($id);
        return view('users.editUser', ['user'=>$user]);
    }
}
