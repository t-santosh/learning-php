@extends('admin.layouts.app')
@section('content')

@include('admin.layouts.navbar')


<div class="container header pb-8 pt-5 pt-md-8">
<div class="row">
    <div class="col-md-12">          
    <a href="{{route('create-post')}}"><button type="button" class="btn btn-primary create" style="margin-bottom: 30px;">Create New Post</button></a>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-uppercase mb-0">Manage Posts</h5>
            </div>
            <div class="table-responsive">
                <table class="table no-wrap post-table mb-0">
                  <thead>
                    <tr>
                      <th scope="col" class="border-0 text-uppercase font-medium pl-4">#</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">Post title</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">Description</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">Created At</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($posts as $post)
                    <tr>
                      <td class="pl-4">{{$post->id}}</td>
                      <td>
                          <h5 class="font-medium mb-0">{{$post->post_title}}</h5>
                      </td>
                      <td>
                          <span class="text-muted">{{$post->description}}</span><br>
                      </td>
                      <td>
                      <span class="text-muted">{{$post->created_at}}</span><br>
                      </td>
                      <td>
                      <a href="{{url('/post/edit/' . $post->id)}}" class="btn btn-outline-info btn-circle btn-lg btn-circle"><i class="fa fa-edit"></i></a>
                        <a href="{{url('/post/delete/' . $post->id)}}"><button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle"><i class="fa fa-trash"></i></button></a>
                        
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
@stop