<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '$100,000'
            ],
            [
                'id' => 2,
                'title' => 'Programmer',
                'salary' => '$50,000'
            ],
            [
                'id' => 3,
                'title' => 'Teacher',
                'salary' => '$45,000'
            ]
        ]
    ]);
});


Route::get('/jobs/{job}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Director',
            'salary' => '$100,000'
        ],
        [
            'id' => 2,
            'title' => 'Programmer',
            'salary' => '$50,000'
        ],
        [
            'id' => 3,
            'title' => 'Teacher',
            'salary' => '$45,000'
        ]
    ];
    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
    return view('job', ['job' => $job]);
});
Route::get('/contact', function () {
    return view('contact');
});
