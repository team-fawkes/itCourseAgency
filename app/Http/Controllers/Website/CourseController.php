<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function our_courses(){
        $data = array();
        return view('front.pages.our_courses',$data);
    }
    public function courses($slug){
        $data = array();
        $data['course'] = Course::where('slug',$slug)->first();
        return view('front.pages.course',$data);
    }
}
