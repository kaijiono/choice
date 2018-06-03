@extends('layouts.app_admin')

@section('content')
    @include('users.users', ['users' => $users])
@endsection