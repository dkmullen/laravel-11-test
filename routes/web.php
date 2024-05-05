<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home',
    ['name' => 'Dennis', 'email' => 'dkmullen@gmail.com'],
 
  );
});

Route::get('/jobs', function () {
  return view('jobs', [
    'jobs' => Job::all(),
  ]);
});

Route::get('/job/{id}', function ($id) {
  $job = Job::find($id);
  return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
  return view('contact');
});