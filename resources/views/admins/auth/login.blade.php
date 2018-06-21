@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>ビジネスパーソンログイン</h1>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            {!! Form::open(['route' => 'admin::login']) !!}
            {!! csrf_field() !!}
                <div class="form-group">
                    {!! Form::label('email', 'メールアドレス') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'パスワード') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('ログイン', ['class' => 'btn btn-primary btn-block']) !!}
                
            {!! Form::close() !!}

            <p>新規登録はこちら {!! link_to_route('admin::register', 'Sign up now!') !!}</p>
        </div>
    </div>
@endsection
