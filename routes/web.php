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
                'title' => 'PHP Developer',
                'salary' => '$50.000'
            ],
            [
                'id' => 2,
                'title' => 'Programmer',
                'salary' => '$60.000',
            ],
            [
                'id' => 3,
                'title' => 'Web Developer',
                'salary' => '$70.000'
            ]
        ]
    ]);
});

Route::get('/job/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'PHP Developer',
            'salary' => '$50.000'
        ],
        [
            'id' => 2,
            'title' => 'Programmer',
            'salary' => '$60.000',
        ],
        [
            'id' => 3,
            'title' => 'Web Developer',
            'salary' => '$70.000'
        ]
    ];
    $job = Arr::first($jobs, fn ($job) => $job['id'] == $id);
    // If Job is found in the array display the Job
    // Else Redirect the user back to the Job Listing page.
    if ($job) {
        return view('job', ['job' => $job]);
    } else {
        return view('jobs', [
            'jobs' => [
                [
                    'id' => 1,
                    'title' => 'PHP Developer',
                    'salary' => '$50.000'
                ],
                [
                    'id' => 2,
                    'title' => 'Programmer',
                    'salary' => '$60.000',
                ],
                [
                    'id' => 3,
                    'title' => 'Web Developer',
                    'salary' => '$70.000'
                ]
            ]
        ]);
    }
});

Route::get('/contact', function () {
    return view('contact');
});
