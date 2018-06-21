@extends('layouts.app')

@section('content')

<h1>メッセージ新規作成ページ</h1>


<div class="row">
        <div class="col-xs-6">
        {!! Form::model($message, ['route' => 'messages.store']) !!}
        
        <div class="form-group">
            {!! Form::label('title', 'タイトル:') !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>
       
       <div class="form-group">
        {!! Form::label('content', '相談内容:') !!}
        {!! Form::text('content', null, ['class' => 'form-control']) !!}

        {!! Form::submit('投稿') !!}

        {!! Form::close('投稿', ['class' => 'btn btn-primary']) !!}
    
        
        </div>
</div>

@endsection