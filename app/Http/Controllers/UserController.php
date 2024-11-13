<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function showUserProfile(User $user, Request $request){
        $profile = $user->profile; 
        return view('profiles', compact('user', 'profile'));
    }

    public function showUserCourse(User $user, Request $reqeust) {
        $courses = $user->courses;
        return view('user-course', compact('user', 'courses'));
    }
}