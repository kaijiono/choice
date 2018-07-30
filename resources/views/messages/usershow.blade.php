{{-- admin用showサブビュー --}}
@extends('layouts.app_admin')

@section('content')

 <h1>相談した内容一覧</h1>

@foreach ($messages as $message)
     <table class="table table-bordered">
        
        <tr>
            <th>投稿日時</th>
            <td>{{ $message->created_at }}</td>
        </tr>
        <tr>
            <th>題名</th>
            <td>{{ $message->title }}</td>
        </tr>
        <tr>
            <th>相談内容</th>
            <td>{{ $message->content }}</td>
        </tr>
        
    </table>
    
    
    {!! Form::close() !!}
@endforeach
<li>{!! link_to_route('admin::users.user', '相談者のプロフィールを見る', ['id' =>Auth::id()]) !!}</li>
<li>{!! link_to_route('talks', 'トークルームを作成する', ['id' =>Auth::id()]) !!}</li>
@endsection