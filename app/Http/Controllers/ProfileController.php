<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showUser(){
        $profiles = Profile::all();
        $courses = Course::all();
        return view('users', compact('profiles', 'courses'));
    }
}