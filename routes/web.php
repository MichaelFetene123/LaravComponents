<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'
    );
    
});

Route::get('/jobs', function () {
    return view('jobs',['jobs' => [

        [
            'title' => 'laravel developer',
        'salary' => '1500$',
        'location' => 'remote',
        ],
        [
            'title' => 'vue developer',
        'salary' => '1300$',
        ],
        [
            'title' => 'react developer',
        'salary' => '1400$',
        ]
]]);
});

Route::get('/contact', function () {
    return view('contact');
});
