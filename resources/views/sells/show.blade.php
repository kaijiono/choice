@extends('layouts.app')

@section('content')

    <h1>id = {{ $sell->id }} のプロフィール編集ページ</h1>

    <p>{{ $sell->content }}</p>

    {!! link_to_route('sells.edit', 'このプロフィールを編集', ['id' => $sell->id]) !!}
    
    {!! Form::model($sell, ['route' => ['sells.destroy', $sell->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}

@endsection