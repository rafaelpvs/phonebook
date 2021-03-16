@extends('layouts.app')

@section('style')
    <style>
        body {
            text-align: center;
        }
        #infos {
            display: flex;
            justify-content: center;
        }
        #name {

        }
        .pe-content {
            margin: 80px;
            width: 200px;
        }
        .email-address-full {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            padding: 5px;
        }
        .email-address {
            display: block;
        }
        .email-address-full img {
            width: 15px;
        }
        .phone-address-full {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            padding: 5px;
        }
        .phone-number {
            display: block;
        }
        .phone-address-full img {
            width: 15px;
        }

    </style>

@endsection

@section('content')
    <h1 id="name">{{$contact->name}}</h1>

    <div id="infos">
        <div id="email-content" class="pe-content">
            <h2 id="email-title">Emails:</h2>
            @foreach($contact->emails as $email)
                <div class="email-address-full">
                    <div class="email-address">
                        {{$email->address}}
                    </div>
                    <span class="edit-address"><img src="/images/edit.png" alt=""></span>
                    <span class="delete-address"><img src="/images/delete.png" alt=""></span>
                </div>

            @endforeach
        </div>

        <div id="phone-content" class="pe-content">
            <h2 id="phone-title">Phones:</h2>
            @foreach($contact->phones as $phone)
                <div class="phone-address-full">
                    <div class="phone-number">
                        {{$phone->number}}
                    </div>
                    <span class="edit-number"><img src="/images/edit.png" alt=""></span>
                    <span class="delete-number"><img src="/images/delete.png" alt=""></span>
                </div>
            @endforeach
        </div>
    </div>
    <script>
        let edaddress = document.querySelectorAll(".edit-address")
        let emaddress = document.querySelectorAll(".email-address")
        let flag = true
        for(let i = 0; i <edaddress.length; i++){
            edaddress[i].addEventListener("click", function(){
                if(flag == true){
                    let text = emaddress[i].innerHTML
                    let input = document.createElement("input")
                    input.value = text

                    emaddress[i].parentNode.child
                    input.className = "input-email"
                    flag = false
                    console.log(emaddress[i])
                }else {
                    let div = document.createElement("div")
                    let input = document.querySelector(".input-email")

                    let text = input.value
                    div.innerHTML = text
                    div.className = "email-address"



                    input.replaceWith(div)
                    flag = true
                    console.log(emaddress[i])
                }


            })
        }
    </script>
@endsection