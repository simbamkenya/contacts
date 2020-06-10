@extends('layouts.app')

@section('content')
<div class="col create">
    <div class="col-md-6 create-inner">
        {!! Form::open(['action'=>'ContactsController@store', 'method'=> 'POST']) !!}
    <div class="form-group">
        {{Form::label('firstname', 'Firstname')}}
        {{Form::text('firstname', '', ['class'=>'form-control', 'placeholder'=>'Firstname'])}}
    </div>

    <div class="form-group">
        {{Form::label('lastname', 'Lastname')}}
        {{Form::text('lastname', '', ['class'=>'form-control', 'placeholder'=>'Lastname'])}}
    </div>

    <div class="form-group">
        {{Form::label('phoneno', 'Phoneno')}}
        {{Form::text('phoneno', '', ['class'=>'form-control', 'placeholder'=>'Phoneno'])}}
    </div>
    {{Form::submit('submit', ['class'=>'btn btn-primary text'])}}
{!! Form::close() !!}
    </div>
</div>

@endsection