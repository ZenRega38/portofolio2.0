<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "desc1" => "Hi, my name is Rega Rizkan Azizan, you can call me Rega. I’m an High School Student, and currently searching for an Internship. If you’re searching for an UI/UX Designer or maybe Junior Programmer for Web, Android or even iOS you have meet the right person, yup that’s me. Let’s take a tour on my portofolio!",
        "desc2" => "Well I’m not success yet, but soon or later. Every succes story starts from a small beginning with a big step. If you are interested for my backstory, I have dedicated page about it. Let’s get to know me more!<br><br>I dedicated it for my family, my friends, my first something, or maybe just highlights of my teenage life ( of course it’s not completed yet, I’m still 17 ). Perhaps it will be the most updated page later on.",
        "desc3" => "I’ve started learning about programming and moblie apps development since 2019, yup I still need to learn much. But I’m not that bad, I have several certificates already. And I always grateful for what I have.<br><br>This is still my beginning, this is why I would like to collaborate with you. I'm sure I can learn so much things from you, or maybe we can learn so much things from each other."
    ]);
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/achievements', function () {
    return view('achievements');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contacts', function () {
    return view('contacts');
});
