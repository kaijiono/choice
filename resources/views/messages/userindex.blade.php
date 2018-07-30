{-- adminが表示するためのindex --}
@extends('layouts.app_admin')

@section('content')

<h1>相談一覧</h1>

        @if (count($messages) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タイトル</th>
                    <th>相談内容</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($messages as $message)
                    <tr>
                        <td>{!! link_to_route('message.usershow', $message->user_id,  $message->id) !!}</td>
                        <td>{{ $message->title }}</td>
                        <td>{{ $message->content }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @endif
   
@endsection