<?php

namespace App\Http\Controllers;
use App\Models\UserModel;
use App\Models\Posts;
use App\Models\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function edit($id){

        $post = Posts::find($id); // select * from post where id = $id;
    
        return view('admin.posts.editpost',['post'=>$post]);
    
    }
    
    public function update(Request $request){

        $id = $request->input('post_id');

        $validation = $request->validate(
            [
                'post_title' => 'required',
                'description' => 'required',
                
            ]
        );

        //update the user data

        $data =[
            'post_title' => $request->input('post_title'),
            'description'=> $request->input('description'),

        ];

        $post = Posts::find($id);
        $post->post_title = $request->input('post_title');
        $post->description = $request->input('description');
        $post->save();
        
        Session::flash('message', 'You have updated post Successfully.');
        return view('admin.posts.editpost',['post'=>$post]);
    
    }

    public function delete($id){

        $post = Posts::find($id); // select * from users where id = $id;
        
        $post->delete();

        $post = Posts::all();

    
        return view('admin.post',['post'=>$post]);
    
    }

    public function create(){
        return view('admin.posts.createpost');
    }

    public function store(Request $request)
    {

        $validation = $request->validate(
            [
                'post_title' => 'required',
                'description' => 'required',
            ]
        );

        //store data to the databse

        $post = new Posts();
        $post->post_title = $request->input('post_title');
        $post->description = $request->input('description');
        if ($post->save()) {
            Session::flash('message', 'You have created new post successfully.');
            return redirect()->route('create-post');
        }
    }


}
