{{-- admintalkroom --}}  

@extends('layouts.app_admin')

@section('content')
    
    @if (count($talks) > 0)
                @include('talks.talkroom', ['talks' => $talks])
            @endif
            
    <div class="row">
        <div class="col-xs-6">
        
       
        
            <div class="form-group">
                
                {!! Form::open(['route' => 'talks.store', 'method' => 'post']) !!}
                        
                        {!! Form::label('comennt') !!}
                        {!! Form::text('comment', null, ['class' => 'form-control']) !!}</br>
                        {!! Form::submit('テスト送信', ['class' => 'btn btn-danger btn-xs']) !!}
                    {!! Form::close() !!}
            </div>
        </div>
    </div>        




@endsection