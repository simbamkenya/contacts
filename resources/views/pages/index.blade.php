@extends('layouts.app')

@section('content')

<div class="col landingpage">
   

        <table class="table table-borderless table-dark">
            <thead>
                <tr> <td colspan="7"><h1 class="text-center">CONTACT LIST</h1></td></tr>
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone No</th>
                </tr>
            </thead>
            <tbody>
                        @if (count($contacts)>0)
                            @foreach ($contacts as $contact)
                            <tr>
                                <td>{{$contact->id}}</td>
                                <td>{{$contact->firstname}}</td>
                                <td>{{$contact->lastname}}</td>
                                <td>{{$contact->phoneno}}</td>
                            <td><a href="/contacts/{{$contact->id}}"><button role ="button" class="btn btn-primary">view</button></a></td>
                            <td><a href="/contacts/{{$contact->id}}/edit"><button role ="button" class="btn btn-primary">edit</button></a></td>
                            
                            <td>
                                {!!Form::open(['action'=>['ContactsController@destroy', $contact->id],'method'=>'POST'])!!}

                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
                                {!!Form::close()!!}
                            </td>
                        </tr>
                            @endforeach                          
                        @else                         
                        @endif          
            </tbody>
        </table>
</div>
@endsection