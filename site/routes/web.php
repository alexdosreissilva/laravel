<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('id/{id}', function ($id) {
    return "Id: $id";
});

Route::get('user/{name?}', function ($name='Alex') {
    return "User: $name";
});