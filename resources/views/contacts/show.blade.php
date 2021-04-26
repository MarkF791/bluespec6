@extends('layouts.layout')

@section('content')
    <a href="/contacts" class="btn btn-default">Go Back</a>
    <h1>{{$contact->subject}}</h1>
    <div>
        {{$contact->message}}
    </div>
    <h3>{{$contact->name}}</h3>
    <h3>{{$contact->email}}</h3>
    <hr>
    <small>Written on {{$contact->created_at}}</small>
    <hr>
    <a href="/contacts/{{$contact->id}}/edit" class="btn btn-default">Edit</a>

    {!!Form::open(['action' => ['\App\Http\Controllers\ContactsController@destroy', $contact->id], 'method' => 'POST', 'class' => 'float-end'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close() !!}
@endsection