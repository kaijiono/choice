@extends('layouts.app_admin')

@section('content')

    <h1>営業パーソン一覧</h1>
    
    @if (count($admins) > 0)
        <ul>
            @foreach ($admins as $admin)
                
                <li>{!! link_to_route('admin::admins.showuser', $admin->id, ['id' => $admin->id]) !!} : {{ $admin->name }}</li>
            @endforeach
            
           
        </ul>
    @endif
   
@endsection