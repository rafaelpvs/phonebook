@extends('layouts.app')

@section('style')
    <style>

    </style>

@endsection

@section('content')
    <div class="main-form">
        <form action="/contacts" method="POST">
            {{ csrf_field() }}
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="number" placeholder="Number">
            <input type="text" name="address" placeholder="Email">
            <input type="submit" value="Save">
        </form>
    </div>
@endsection