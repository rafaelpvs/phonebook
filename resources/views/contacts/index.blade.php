@extends('layouts.app')
@section('style')
    <style>

    </style>

@endsection
@section('content')
    <ul>
        @foreach($contacts as $contact)
        <li>
            <button class="btn btn-success"><a href="/contacts/{{$contact->id}}">{{$contact->name}}</a></button>
        </li>
        @endforeach
    </ul>

@endsection
