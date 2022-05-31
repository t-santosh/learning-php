@extends('layouts.master')
@section('content')
<div class="content-wrapper">
    <!-- Main content -->
    <div class="row">
        <section class="col-lg-6 m-auto">
            <div class="card">
                {{-- card header --}}
                <div class="card-header">
                    <h3 class="card-title">
                        <div>
                            <h4>Create new user account</h4>
                        </div>
                        {{-- to display the error following "if" condition is applied --}}
                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                <div class="modal-dialog modal-dialog-centered">
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </div>
                            </ul>
                        </div>
                        @endif
                        {{-- Session class is used to display the message on the top of the input field of form --}}
                        @if (Session::has('message'))
                        <p class="alert alert-info">{{ Session::get('message') }}</p>
                        @endif
                    </h3>
                </div>
                {{-- card body --}}
                <div class="card-body">
                    <div class="tab-content p-0">
                        <form action="{{ route('auth-register') }}" method="POST" class="row g-3">


                            {{-- csrf token should be used correctly to avoid 419 page expire error before submitting
                            any post request --}}
                            @csrf
                            <div class="col-md-6">
                                <label for="first name" class="form-label">First name</label>
                                <input type="text" class="form-control" name="first-name" id="firstName"
                                    placeholder="First name">
                            </div>
                            <div class="col-md-6">
                                <label for="last name" class="form-label">Last name</label>
                                <input type="text" class="form-control" name="last-name" id="lastName"
                                    placeholder="Last name">
                            </div>
                            <div class="col-md-12 mt-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="example@email.com">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="password"
                                    placeholder="Password">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="password" class="form-label">Confirm password</label>
                                <input type="password" class="form-control" name="password_confirmation"
                                    id="PasswordConfirmation" placeholder="Confirm password">
                            </div>
                            <div class="col-12 mt-3">
                                <label for="inputAddress" class="form-label">Address</label>
                                <input type="text" class="form-control" name="address" id="inputAddress"
                                    placeholder="1234 Main St">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="inputCity" class="form-label">City</label>
                                <input type="text" class="form-control" name="city" id="inputCity">
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="inputState" class="form-label">State</label>
                                <select id="inputState" name="state" class="form-select form-control">
                                    <option selected>Select the state</option>
                                    <option>NSW</option>
                                    <option>ACT</option>
                                    <option>SA</option>
                                    <option>WA</option>
                                    <option>NT</option>
                                </select>
                            </div>
                            <div class="col-md-2 mt-3 mb-5">
                                <label for="inputZip" class="form-label">Zip</label>
                                <input type="text" name="zip" class="form-control" id="inputZip">
                            </div>
                            <div class="col-3 m-auto">
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