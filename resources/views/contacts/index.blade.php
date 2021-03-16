@extends('layouts.app')
@section('style')
    <style>
        #btn-create a{
            text-decoration: none;
            padding: 15px;
            color: white;
        }
        #btn-create {
            padding: 4px 15px;
            font-size: 25px;
            margin-left: 50px;
            margin-bottom: 50px;
        }
        #grid {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-template-rows: 1fr 1fr 1fr;
        }
        .contact {
            display: block;
            text-align: center;
            margin: 10px;
            background-color: #D5DBC3;
            height: 200px;
            padding: 10px;
            border-radius: 20px;
        }
        #grid a {
            font-size: 30px;
            text-decoration: none;
            width: content-box;

        }
        #grid a h1 {
            font-size: 30px;
            margin:15px;
        }

    </style>

@endsection
@section('content')
<button id="btn-create" class="btn btn-success" ><a href="/contacts/create">Create</a></button>
<div id="grid">
    @foreach($contacts as $contact)
        <a href="/contacts/{{$contact->id}}">
            <div class="contact">
                <h1>{{$contact->name}}</h1>
                <div class="main-email">{{$contact->emails()->first()['address']}}</div>
                <div class="main-phone">{{$contact->phones()->first()['number']}}</div>
            </div>
        </a>

    @endforeach
</div>




@endsection
