<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});
use faker\Factory as Faker;

Route::get('/dashboard', function () {
    $contacts = [];
    $faker = Faker::create();
    for($i = 1; $i <= 10; $i++){
        $contacts[] = [
            'name' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'phone' => $faker->phoneNumber
        ];
    };
    return view("dashboard",['contacts' => $contacts]);
});
Route::get('/register', function () {
    return view('register');
});
