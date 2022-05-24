<?php

namespace App\Http\Controllers;
use App\Models\UserModel;
use App\Models\Posts;
use App\Models\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function viewuser(){
        $users = UserModel::all();  // select * from users;
        return view('admin.user', ['users' => $users]);
    }
    public function viewpost(){
        $posts = Posts::all();  // select * from users;
        return view('admin.post', ['posts' => $posts]);
    }
    public function viewservice(){
        $services = Services::all();  // select * from users;
        return view('admin.service', ['services' => $services]);
    }



    public function edit($id){

        $user = UserModel::find($id); // select * from users where id = $id;
    
        return view('admin.edit',['user'=>$user]);
    
    }
    
    public function update(Request $request){

        $id = $request->input('user_id');

        $validation = $request->validate(
            [
                'first_name' => 'required|max:10',
                'last_name' => 'required|max:10',
                'email' => 'unique:users,email,'. $id,
                'mobile' => 'required|digits_between:10,10|unique:users,mobile,'.$id,
                'gender' => 'required|in:Male,Female,Other',
            ]
        );

        //update the user data

        $data =[
            'first_name' => $request->input('first_name'),
            'last_name'=> $request->input('last_name'),
            'email'=>$request->input('email'),
            'mobile'=>$request->input('mobile'),
            'gender'=>$request->input('gender'),

        ];

        $user = UserModel::find($id);
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->mobile = $request->input('mobile');
        $user->gender = $request->input('gender');
        $user->save();
        
        Session::flash('message', 'You have registered Successfully.');
        return view('admin.edit',['user'=>$user]);
    
    }

    public function delete($id){

        $user = UserModel::find($id); // select * from users where id = $id;
        
        $user->delete();

        $user = UserModel::all();

    
        return view('admin.user',['user'=>$user]);
    
    }

    public function create(){
        return view('admin.create');
    }

    public function store(Request $request)
    {

        $validation = $request->validate(
            [
                'first_name' => 'required|max:10',
                'last_name' => 'required|max:10',
                'email' => 'unique:users,email',
                'password' => 'required|min:6|max:10|confirmed',
                'gender' => 'required|in:Male,Female,Other',
                'mobile' => 'required|digits_between:10,10|unique:users,mobile'
            ]
        );

        //store data to the databse

        $user = new UserModel();
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->gender = $request->input('gender');
        $user->mobile = $request->input('mobile');
        $user->role = $request->input('role');
        if ($user->save()) {
            Session::flash('message', 'You have created new user successfully.');
            return redirect()->route('create-user');
        }
    }


}
