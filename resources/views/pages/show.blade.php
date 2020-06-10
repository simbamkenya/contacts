@extends('layouts.app')

@section('content')
<div class="col md-6 contact">
    <div class="profile text-white">
        <h2 class="text-center">Personal Details</h2>

        <span class="details">
            <hr> First Name: {{$contact->firstname}} 
            <hr> Last Name: {{$contact->lastname}}
            <hr> Phone No:  {{$contact->phoneno}}
        </span>
        
        <div class="text-center btndetails">
            <a href="/contacts"><button role="button" class="btn btn-primary">Back</button></a>
        </div>
    </div>
</div>
@endsection