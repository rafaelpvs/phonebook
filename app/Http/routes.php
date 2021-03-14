<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Contact;
use App\User;

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/user/{id}/contacts', function ($id) {
    $user = User::find($id);
    return $user->contacts()->get();
});
Route::get('/test/{id}', function ($id) {
    $contact = Contact::findOrFail($id);
    return view('contacts.show', compact('contact'));
});

Route::resource('contacts', 'ContactsController');

Route::get('/contacts/{id}/emails', function ($id) {
    $contact = Contact::find($id);
    return dd($contact->emails());
});