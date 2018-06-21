@extends('layouts.app')

@section('content')

    <h1>id = {{ $rent->id }} のプロフィール編集ページ</h1>

    <p>{{ $rent->content }}</p>

    {!! link_to_route('rents.edit', 'このプロフィールを編集', ['id' => $rent->id]) !!}
    
    {!! Form::model($rent, ['route' => ['rents.destroy', $rent->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}

@endsection

