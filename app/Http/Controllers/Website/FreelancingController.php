<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FreelancingController extends Controller
{
    public function freelancing(){
        $data = array();
        return view('front.pages.freelancing',$data);
    }
}
