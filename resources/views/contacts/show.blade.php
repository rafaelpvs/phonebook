@extends('layouts.app')

@section('content')
    <br>
    {{$contact->name}}
    <br>
    <h1>Emails:</h1>
    @foreach($contact->emails as $email)
        <li>
            {{$email->address}}
        </li>
    @endforeach
    <h1>Phones:</h1>
    @foreach($contact->phones as $phone)
        {{$phone->number}}
    @endforeach
@endsection