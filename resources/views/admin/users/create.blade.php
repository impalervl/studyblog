@extends('layouts.admin')

@section('content')
    <h1>Create Users</h1>

    {!! Form::open(['method'=>'POST','action'=>'AdminUsersController@store','files'=>true]) !!}

            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">

                {!! Form::label('name','Enter Name:') !!}

                {!! Form::text('name', null, ['class' =>'form-control']) !!}

            </div>

            <div class="form-group">

                {!! Form::label('name','Enter Password:') !!}

                {!! Form::password('password', ['class'=>'form-control']) !!}

            </div>

            <div class="form-group">

                {!! Form::label('email','Enter Email:') !!}

                {!! Form::text('email', null, ['class' =>'form-control']) !!}

            </div>

            <div class="form-group">

                {!! Form::label('photo_id','Choose Photo:') !!}

                {!! Form::file('photo_id', null, ['class' =>'form-control']) !!}

            </div>

            <div class="form-group">

                {!! Form::label('role_id','Enter Role:') !!}

                {!! Form::select('role_id',[''=>'Chose your destiny'] + $roles, null, ['class' =>'form-control']) !!}

            </div>

            <div class="form-group">

                {!! Form::label('user_active','Enter Status:') !!}

                {!! Form::select('user_active',array(1=>'Active',0=>'Not active'), 0, ['class' =>'form-control']) !!}

            </div>

            {!! Form::submit('CREATE USER', ['class' =>'btn btn-primary']) !!}

    {!! Form::close() !!}

    @include('includes.formerror')
@stop