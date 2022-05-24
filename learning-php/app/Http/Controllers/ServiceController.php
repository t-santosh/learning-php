<?php

namespace App\Http\Controllers;
use App\Models\UserModel;
use App\Models\Posts;
use App\Models\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ServiceController extends Controller
{
    public function edit($id){

        $service = Services::find($id); // select * from users where id = $id;
    
        return view('admin.services.editservice',['service'=>$service]);
    
    }
    
    public function update(Request $request){

        $id = $request->input('service_id');

        $validation = $request->validate(
            [
                'service_title' => 'required',
                'description' => 'required',
                
            ]
        );

        //update the user data

        $data =[
            'service_title' => $request->input('service_title'),
            'description'=> $request->input('description'),

        ];

        $service = Services::find($id);
        $service->service_title = $request->input('service_title');
        $service->description = $request->input('description');
        $service->save();
        
        Session::flash('message', 'You have updated service Successfully.');
        return view('admin.services.editservice',['service'=>$service]);
    
    }

    public function delete($id){

        $service = Services::find($id); // select * from service where id = $id;
        
        $service->delete();

        $service = Services::all();

    
        return view('admin.service',['service'=>$service]);
    
    }

    public function create(){
        return view('admin.services.createservice');
    }

    public function store(Request $request)
    {

        $validation = $request->validate(
            [
                'service_title' => 'required',
                'description' => 'required',
            ]
        );

        //store data to the databse

        $service = new Services();
        $service->service_title = $request->input('service_title');
        $service->description = $request->input('description');
        if ($service->save()) {
            Session::flash('message', 'You have created new service successfully.');
            return redirect()->route('create-service');
        }
    }


}
