@extends('layouts.app')

@section('style')
    <style>

    </style>

@endsection

@section('content')
    <h1 id="name">{{$contact->name}}</h1>
    <h2 id="email-title">Emails:</h2>
    @foreach($contact->emails as $email)
        <li>
            {{$email->address}}
        </li>
    @endforeach

    <h2 id="phone-title">Phones:</h2>
    @foreach($contact->phones as $phone)
        <li>
            {{$phone->number}}
        </li>
    @endforeach
@endsection