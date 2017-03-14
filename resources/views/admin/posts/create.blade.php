@extends('layouts.admin')

@section('content')

    <h1>Post Create</h1>

    {!! Form::open(['method'=>'POST','action'=>'AdminPostsController@store','files'=>true]) !!}

    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="form-group">

        {!! Form::label('title','Enter Title:') !!}

        {!! Form::text('title', null, ['class' =>'form-control']) !!}

    </div>

    <div class="form-group">

        {!! Form::label('body','Enter Body:') !!}

        {!! Form::textarea('body', null, ['class'=>'form-control','rows'=>3]) !!}

    </div>

    <div class="form-group">

        {!! Form::label('category_id','Category') !!}

        {!! Form::select('category_id', array('1'=>'PHP', '2' => 'JavaScript'), null, ['class' =>'form-control']) !!}

    </div>

    <div class="form-group">

        {!! Form::label('photo_id','Choose Photo:') !!}

        {!! Form::file('photo_id', null, ['class' =>'form-control']) !!}

    </div>



    {!! Form::submit('CREATE USER', ['class' =>'btn btn-primary']) !!}

    {!! Form::close() !!}

    @include('includes.formerror')
@endsection