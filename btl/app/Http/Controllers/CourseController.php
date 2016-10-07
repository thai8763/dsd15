<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Course;

class CourseController extends Controller
{
    //
    public function index($name) {
        $courses = Course::all();
        return view("pages.course") -> with([
            'name' => $name,
            'courses' => $courses
        ]);
    }
}
