@extends('layouts.app')

@section('content')
<div class="col edit">
    <div class="edit-inner">
        {!! Form::open(['action'=>['ContactsController@update', $contact->id], 'method'=> 'POST']) !!}
        <div class="form-group">
            {{Form::label('firstname', 'Firstname')}}
            {{Form::text('firstname', $contact->firstname, ['class'=>'form-control', 'placeholder'=>'Firstname'])}}
        </div>
    
        <div class="form-group">
            {{Form::label('lastname', 'Lastname')}}
            {{Form::text('lastname', $contact->lastname, ['class'=>'form-control', 'placeholder'=>'Lastname'])}}
        </div>
    
        <div class="form-group">
            {{Form::label('phoneno', 'Phoneno')}}
            {{Form::text('phoneno', $contact->phoneno, ['class'=>'form-control', 'placeholder'=>'Phoneno'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    </div>
</div>

@endsection