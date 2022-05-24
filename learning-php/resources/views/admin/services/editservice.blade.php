@extends('admin.layouts.app')
@section('content')

<div class="container header pb-8 pt-5 pt-md-8">
    <div class="register_form card">
        <div class="card-body">
            <form action="{{route('service.update')}}" method="post">
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
                <h2 class="text-center">Update</h2>
                <input type="hidden" name="service_id" value="{{$service->id}}" />
                <div class="form-group">
                    <input name="service_title" type="text" class="form-control" placeholder="Service Title" value="{{$service->service_title}}" required="required">
                </div>
                <div class="form-group">
                    <textarea name="description" class="form-control" placeholder="Description" value="{{$service->description}}" required="required"></textarea>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Update</button>
                </div>
            
            </form>
        </div>
    </div>
</div>
@stop