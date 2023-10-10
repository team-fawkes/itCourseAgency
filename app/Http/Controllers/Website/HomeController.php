<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;

class HomeController extends Controller
{
    public function home(){
        $data = array();
        return view('front.pages.home',$data);
    }
    public function page($slug){
        $page = Page::where('slug',$slug)->first();
        if (!$page){
            abort(404);
        }
        $data = array();
        $data['title'] = $page->title;
        $data['meta_title'] = $page->title;
        $data['meta_description'] = $page->title;
        $data['content'] = $page->body;
        return view('front.pages.page',$data);
    } public function free_seminar(){
        $data = array();
        return view('front.pages.free_seminar',$data);
    }
}
