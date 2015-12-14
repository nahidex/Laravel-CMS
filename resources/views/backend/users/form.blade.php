@extends('layouts.backend')

@section('title', $user->exists ? 'Editing '.$user->name : 'Create New User')

@section('content')
	{!! Form::model($user, [
		'method' => $user->exists ? 'put' : 'post',
		'route'  => $user->exists ? ['backend.users.update', $user->id] : ['backend.users.store']
	]) !!}

    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null, ['class' => 'form-control' ]) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'E-Mail Address') !!}
        {!! Form::text('email', null, ['class' => 'form-control' ]) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password', 'Password') !!}
        {!! Form::password('password', ['class' => 'form-control' ]) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password_confirmation', 'Confirm Password') !!}
        {!! Form::password('password_confirmation', ['class' => 'form-control' ]) !!}
    </div>

    {!! Form::submit($user->exists ? 'Save User' : 'Create New User', ['class' => 'btn btn-primary']) !!}


	{!! Form::close() !!}
@endsection
