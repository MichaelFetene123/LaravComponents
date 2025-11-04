<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'
    );
});

Route::get('/jobs', function () {
    return view('jobs',['jobs' => [

        [
            'id' => 1,
            'title' => 'laravel developer',
        'salary' => '1500$',
        'location' => 'remote',
        ],
        [
            'id' => 2,
            'title' => 'vue developer',
        'salary' => '1300$',
        ],
        [
            'id' => 3,
            'title' => 'react developer',
        'salary' => '1400$',
        ]
]]);
});

Route::get('/jobs/{id}', function ($id) {
   $jobs =  [

        [
            'id' => 1,
            'title' => 'laravel developer',
        'salary' => '1500$',
    
        ],
        [
            'id' => 2,
            'title' => 'vue developer',
        'salary' => '1300$',
        ],
        [
            'id' => 3,
            'title' => 'react developer',
        'salary' => '1400$',
        ]
        ];

     $job =  Arr::first($jobs, fn($job) => $job['id'] == $id);

   
         return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
