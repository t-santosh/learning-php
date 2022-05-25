@extends('layouts.master')
@section('content')
<div class="content-wrapper">
    @include('includes.breadcrumb')
    <!-- Main content -->
    <div class="row">
        <section class="col-lg-8 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fa fa-solid fa-user-plus mr-2 mt-1 align-center"></i>
                        <h4 class="text-center">Create new user account</h4>
                    </h3>
                </div>
                <div class="card-body">
                    <div class="tab-content p-0">
                        <form class="row g-3">
                            <div class="col-md-6">
                                <label for="first name" class="form-label">First name</label>
                                <input type="text" class="form-control" id="firstName" placeholder="First name">
                            </div>
                            <div class="col-md-6">
                                <label for="last name" class="form-label">Last name</label>
                                <input type="text" class="form-control" id="lastName" placeholder="Last name">
                            </div>
                            <div class="col-md-12 mt-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="example@email.com">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Password">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="password" class="form-label">Confirm password</label>
                                <input type="confirmation_password" class="form-control" id="confirmationPassword" placeholder="Confirm password">
                            </div>
                            <div class="col-12 mt-3">
                                <label for="inputAddress" class="form-label">Address</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                            </div>
                            <div class="col-12 mt-3">
                                <label for="inputAddress2" class="form-label">Address 2</label>
                                <input type="text" class="form-control" id="inputAddress2"
                                    placeholder="Apartment, studio, or floor">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="inputCity" class="form-label">City</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="inputState" class="form-label">State</label>
                                <select id="inputState" class="form-select form-control">
                                    <option selected>Please select the state</option>
                                    <option>NSW</option>
                                    <option>ACT</option>
                                    <option>SA</option>
                                    <option>WA</option>
                                    <option>NT</option>
                                </select>
                            </div>
                            <div class="col-md-2 mt-3 mb-5">
                                <label for="inputZip" class="form-label">Zip</label>
                                <input type="text" class="form-control" id="inputZip">
                            </div>
                            <div class="col-2 m-auto">
                                <button type="submit" class="btn btn-primary form-control">Register</button>
                            </div>
                        </form>
                    </div>
                </div><!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
    </div>
</div>
<!-- /.content -->
@endsection