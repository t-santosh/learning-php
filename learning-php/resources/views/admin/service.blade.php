@extends('admin.layouts.app')
@section('content')

<div class="container header pb-8 pt-5 pt-md-8">
<div class="row">
    <div class="col-md-12">
    <a href="{{route('create-service')}}"><button type="button" class="btn btn-primary create" style="margin-bottom: 30px;">Create New Service</button></a>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-uppercase mb-0">Manage Services</h5>
            </div>
            <div class="table-responsive">
                <table class="table no-wrap post-table mb-0">
                  <thead>
                    <tr>
                      <th scope="col" class="border-0 text-uppercase font-medium pl-4">#</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">Service title</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">Description</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">Created At</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($services as $service)
                    <tr>
                      <td class="pl-4">{{$service->id}}</td>
                      <td>
                          <h5 class="font-medium mb-0">{{$service->service_title}}</h5>
                      </td>
                      <td>
                          <span class="text-muted">{{$service->description}}</span><br>
                      </td>
                      <td>
                      <span class="text-muted">{{$service->created_at}}</span><br>
                      </td>
                      <td>
                        <a href="{{url('/service/edit/' . $service->id)}}" class="btn btn-outline-info btn-circle btn-lg btn-circle"><i class="fa fa-edit"></i></a>
                        <a href="{{url('/service/delete/' . $service->id)}}"><button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle"><i class="fa fa-trash"></i></button></a>  
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