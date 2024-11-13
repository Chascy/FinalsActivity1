<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function showCourseUser(Course $course, Request $request){
        $users = $course->users;
        return view('course-user', compact('users', 'course'));
    }
}