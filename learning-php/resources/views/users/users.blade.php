@extends('layouts.master')
@section('content')
<div class="content-wrapper">
    <!-- Main content -->
    <div class="row">
        <section class="col-lg-12 m-auto">
            <div class="card">
                {{-- card header --}}
                <div class="card-header">
                    <h3 class="card-title">
                        <h4>Users list</h4>
                    </h3>
                </div>
                {{-- card body --}}
                <div class="card-body">
                    <div class="tab-content p-0">
                        <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="row">
                                <div class="col-lg-12">
                                    <table id="example" class="table table-striped table-bordered dataTable no-footer"
                                        style="width: 100%;" role="grid" aria-describedby="example_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="text-center sorting_asc" tabindex="0" aria-controls="example"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="SL: activate to sort column descending"
                                                    style="width: 5%;">Id</th>
                                                <th class="text-center sorting" tabindex="0" aria-controls="example"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Name: activate to sort column ascending"
                                                    style="width: 12%;">First Name</th>
                                                <th class="text-center sorting" tabindex="0" aria-controls="example"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Name: activate to sort column ascending"
                                                    style="width: 12%;">Last Name</th>
                                                <th class="text-center sorting" tabindex="0" aria-controls="example"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Email address: activate to sort column ascending"
                                                    style="width: 20%;">Email</th>
                                                <th class="text-center sorting" tabindex="0" aria-controls="example"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Mobile: activate to sort column ascending"
                                                    style="width: 20%;">Address</th>
                                                <th class="text-center sorting" tabindex="0" aria-controls="example"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Status: activate to sort column ascending"
                                                    style="width: 10%;">City</th>
                                                <th class="text-center sorting" tabindex="0" aria-controls="example"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Created: activate to sort column ascending"
                                                    style="width: 5%;">State</th>
                                                <th width="25%" class="text-center sorting" tabindex="0"
                                                    aria-controls="example" rowspan="1" colspan="1"
                                                    aria-label="Action: activate to sort column ascending"
                                                    style="width: 6%;">Zip code</th>
                                                <th width="25%" class="text-center sorting" tabindex="0"
                                                    aria-controls="example" rowspan="1" colspan="1"
                                                    aria-label="Action: activate to sort column ascending"
                                                    style="width: 6%;">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach($users as $user)
                                            <tr role="row">
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->first_name }}</td>
                                                <td>{{ $user->last_name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->address }}</td>
                                                <td>{{ $user->city }}</td>
                                                <td>{{ $user->state }}</td>
                                                <td>{{ $user->zip }}</td>
                                                <td>
                                                    <a class="btn btn-success btn-sm" href="#">View</a>
                                                    <a class="btn btn-secondary btn-sm" href="{{ url('/edit/'.$user->id)}}">Edit</a>
                                                    <a class="btn btn-danger btn-sm" href="#">Delete</a>
                                                    <a class="btn btn-primary btn-sm" href="#">Active</a>
                                                    <a class="btn btn-default btn-sm" href="#">Inactive</a>
  
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.card-body -->
                </div>
            </div>
            <!-- /.card -->
        </section>
    </div>
</div>
<!-- /.content -->
@endsection