@extends('layouts.app_admin')

@section('content')
    
    <h1>ビジネスパーソンマイページ</h1>
    
    @include('admins.admins', ['admins' => $admins])
@endsection