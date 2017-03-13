@extends('layouts.admin')

@section('content')
    <h1>Create Users</h1>
    <div class="row">

    <div class="col-sm-3">

        <img src="{{$user->photo ? $user->photo->path : 'No photo'}}" alt="" class="img-responsive img-rounded">

    </div>

    <div class="col-sm-9">
        {!! Form::model($user,['method'=>'PATCH','action'=>['AdminUsersController@update',$user->id], 'files'=>true]) !!}

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

            {!! Form::select('role_id', $roles, null, ['class' =>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('user_active','Enter Status:') !!}

            {!! Form::select('user_active',array(1=>'Active',0=>'Not active'),null, ['class' =>'form-control']) !!}

        </div>

        {!! Form::submit('CREATE USER', ['class' =>'btn btn-primary']) !!}

        {!! Form::close() !!}

    </div>
    </div>

        <div class="row">
        @include('includes.formerror')
    </div>


@stop