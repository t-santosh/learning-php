@extends('admin.layouts.app')
@section('content')

<div class="container header pb-8 pt-5 pt-md-8">
    <div class="register_form card">
        <div class="card-body">
            <form action="{{route('post.update')}}" method="post">
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
                <input type="hidden" name="post_id" value="{{$post->id}}" />
                <div class="form-group">
                    <input name="post_title" type="text" class="form-control" placeholder="Post Title" value="{{$post->post_title}}" required="required">
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="description" name="description" placeholder="Enter Post Description" rows="4" cols="50" value="{{$post->description}}" required="required"></textarea>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Update</button>
                </div>
            
            </form>
        </div>
    </div>
</div>
@stop