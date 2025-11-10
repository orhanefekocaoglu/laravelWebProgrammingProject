<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get("/hello", function () {
    return "Hello World";
});
Route::get("/hello/{name}", function ($name) {
    return "Hello " . $name;
});
Route::get("/viewlike", function () {
    return view("viewlike");
});
Route::get("/viewwithdata", function () {
    $name = "Orhan Efe";
    return view("viewwithdata", ["name" => $name]);
});
Route::get("/name", [namecontroller::class, "index"]);
Route::get("/name/{name}", [namecontroller::class, "show"]);
Route::get("/spanish", function () {
    return view("spanishexceptions");
});