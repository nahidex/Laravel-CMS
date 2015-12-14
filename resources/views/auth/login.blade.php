@extends('layouts.auth')

@section('title','Login Page')

@section('heading','Welcome. Please Login')

@section('content')
	    {!! Form::open() !!}
        <div class="form-group">
            {!! Form::label('email', 'E-Mail Address') !!}
            {!! Form::text('email', null, ['class' => 'form-control' ]) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password', 'Password') !!}
            {!! Form::password('password', ['class' => 'form-control' ]) !!}
        </div>

        {!! Form::submit('Login', ['class'=>'btn btn-primary']) !!}

        <a class="small" href="{{ route('auth.password.email') }}">Forgot password?</a>
    {!! Form::close() !!}

@endsection