<?php


Route::get('/', function () {
    return view('Home');
});


Route::get('about', function () {
    return view('about');
});

Route::get('services', function () {
    return view('services');
});

Route::get('faqs', function () {
    return view('faqs');
});

Route::get('contacts', function () {
    return view('contacts');
});
