@extends('layouts.app')

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
    
    {!! link_to_route('messages.edit', 'このメッセージを編集', ['id' => $message->id], ['class' => 'btn btn-default']) !!}
    {!! Form::model($message, ['route' => ['messages.destroy', $message->id], 'method' => 'delete']) !!}
    　　　{!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@endforeach
@endsection