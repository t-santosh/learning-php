@extends('admin.layouts.app')
@section('content')


<div class="container header pb-8 pt-5 pt-md-8">
    <div class="register_form card">
        <div class="card-body">
            <h2 class="text-uppercase text-center mb-5">Create New Service</h2>
            <form action="{{route('store-service')}}" method="post" enctype="multipart/form-data">
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
                    <div class="form-group">
                        <label for="name">Service Title</label>
                        <input type="text" class="form-control" id="service_title" name="service_title" placeholder="Enter Service Title">
                    </div>
                
                    <div class="form-group">
                        <label for="name">Description</label>
                        <textarea class="form-control" id="service_description" name="description" placeholder="Enter Service Description" rows="4" cols="50"></textarea>
                    </div>
                   
                    <button type="submit" id="register" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
</div>
@stop