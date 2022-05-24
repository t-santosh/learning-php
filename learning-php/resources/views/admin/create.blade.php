@extends('admin.layouts.app')
@section('content')


<div class="container header pb-8 pt-5 pt-md-8">
    <div class="register_form card">
        <div class="card-body">
            <h2 class="text-uppercase text-center mb-5">Create New User</h2>
            <form action="{{route('store-user')}}" method="post" enctype="multipart/form-data">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    @if(Session::has('message'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                    @endif

                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">First Name</label>
                                <input type="text" class="form-control" id="name" name="first_name" placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Last Name</label>
                                <input type="text" class="form-control" id="name" name="last_name" placeholder="Enter Name">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label for="password">Your Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="confirmpassword">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmpassword" name="password_confirmation" placeholder="Password">
                    </div>
                
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="mobile">Mobile</label>
                                <input type="number" class="form-control" id="mobile" name="mobile" placeholder="Mobile">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <input type="text" class="form-control" id="gender" name="gender" placeholder="Male/Female">
                            </div>
                        </div>
                    </div>
                    <input type="hidden" class="form-control" id="role" name="role" placeholder="" value="user">


                    <button type="submit" id="register" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</div>
@stop