@extends('layouts.layout')

@section('content')
    <h1>Edit your message</h1>
    {!! Form::open(['action' => '\App\Http\Controllers\ContactsController@store', 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter your name'])}}
    </div>
    <div class="form-group">
        {{Form::label('email', 'Email')}}
        {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Enter your email'])}}
    </div>
    <div class="form-group">
        {{Form::label('subject', 'Subject')}}
        {{Form::text('subject', '', ['class' => 'form-control', 'placeholder' => 'Subject'])}}
    </div>
    <div class="form-group">
        {{Form::label('message', 'Message')}}
        {{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Message text'])}}
    </div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}
@endsection