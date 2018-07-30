{{-- admintalkroom --}}  

@extends('layouts.app')

@section('content')
    
    @if (count($talks) > 0)
                @include('talks.talkroom', ['talks' => $talks])
            @endif
            
    <div class="row">
        <div class="col-xs-6">
        {!! Form::model($talk, ['route' => 'talks.store']) !!}
       
       <div class="form-group">
        {!! Form::label('is_user') !!}
        {!! Form::text('is_user', null, ['class' => 'form-control']) !!}

        {!! Form::submit('送信') !!}

        {!! Form::close('投稿', ['class' => 'btn btn-primary']) !!}
    
        
        </div>
</div>        




@endsection