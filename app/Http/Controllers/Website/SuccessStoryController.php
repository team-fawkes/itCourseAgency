<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SuccessStoryController extends Controller
{
    public function success_story(){
        $data = array();
        return view('front.pages.success_story',$data);
    }
}
