@extends('layouts.layout')

@section('content')
    <h1>Messages</h1>
    @if(count($contacts) > 0)
        @foreach($contacts as $contact)
        <div class="card card-body bg-light">
            <h3><a href="/contacts/{{$contact->id}}">{{$contact->subject}}</a></h3>
            <small>Written on {{$contact->created_at}}</small>
        </div>
        @endforeach
        {{$contact->links()}}
    @else
        <p>No messages found</p>
    @endif
@endsection