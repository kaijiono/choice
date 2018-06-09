@extends('layouts.app')

@section('content')

    <h1>id = {{ $buy->id }} のプロフィール編集ページ</h1>

    <p>{{ $buy->content }}</p>

    {!! link_to_route('buys.edit', 'このプロフィールを編集', ['id' => $buy->id]) !!}
    
    {!! Form::model($buy, ['route' => ['buys.destroy', $buy->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}

@endsection