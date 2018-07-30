@extends('layouts.app')

@section('content')

<h1>id: {{ $message->id }} の相談内容編集フォーム</h1>
<div class="row">
        <div class="col-xs-6">

    {!! Form::model($message, ['route' => ['messages.update', $message->id], 'method' => 'put']) !!}
    
                    <div class="form-group">
                        {!! Form::label('title', '題名:') !!}
                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('content', '相談内容:') !!}
                        {!! Form::text('content', null, ['class' => 'form-control']) !!}
                    </div>
                    
                    {!! Form::submit('更新', ['class' => 'btn btn-default']) !!}
    {!! Form::close() !!}
    </div>
</div>

@endsection

