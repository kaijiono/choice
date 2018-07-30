@extends('layouts.app')

@section('content')

<h1>相談フォーム</h1>


<div class="row">
        <div class="col-xs-6">
        {!! Form::model($message, ['route' => 'messages.store']) !!}
        
        <div class="form-group">
            {!! Form::label('title', '題名:') !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>
       
       <div class="form-group">
        {!! Form::label('content', '相談内容:') !!}
        {!! Form::text('content', null, ['class' => 'form-control']) !!}

        {!! Form::submit('相談する') !!}

        {!! Form::close('投稿', ['class' => 'btn btn-primary']) !!}
    
        
        </div>
</div>

@endsection