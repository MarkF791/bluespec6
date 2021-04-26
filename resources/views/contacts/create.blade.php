@extends('layouts.layout')

@section('content')
<div class="container-fluid" style="padding-top:50px;">
    <img width="100%" height="60" src="http://www.rdplast.in/wp-content/uploads/2018/01/contact-us-banner-1024x303.jpg" class="img-fluid" alt="Responsive image">
  </div>
  <div class="container">
    <h1>Contact Us</h1>
    <hr>
    <p>Please use the form below to get in touch with the team</p>
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
</div>
@endsection