<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function department($slug){
        $data = array();
        $data['department'] = Department::where('slug',$slug)->first();
        return view('front.pages.department',$data);
    }
}
