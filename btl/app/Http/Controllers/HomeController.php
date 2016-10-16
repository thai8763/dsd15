<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\LearnCourse;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = LearnCourse::join ('users', 'learn_courses.user_id', '=', 'users.id')
            -> join ('courses', 'learn_courses.course_id', '=', 'courses.id')
            -> select ('courses.*')
            -> where('learn_courses.user_id', '=', Auth::user() -> id)
            -> get();

        return view('home') -> with('courses', $courses);
    }
}
