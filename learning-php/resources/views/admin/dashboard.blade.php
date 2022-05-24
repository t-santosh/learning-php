@extends('admin.layouts.app')

@section('content')

    @include('admin.layouts.navbar')


    <a href="{{ route('view-users') }}">Users</a>
    <a href="{{ route('view-posts') }}">Posts</a>
    <a href="{{ route('view-services') }}">Services</a>

@endsection
