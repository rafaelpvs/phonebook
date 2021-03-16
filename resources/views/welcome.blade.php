@extends('layouts.app')
<style>
    #content-button {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    #mycontact {

    }
    #button-my {
        font-weight: bold;
        font-size: 30px;
    }

</style>
@section('content')
    <div id="content-button">
        <a id="mycontact" href="/contacts"><button id="button-my" class="btn btn-success">My contacts</button></a>
    </div>
@endsection
