<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;

class HomeController extends Controller
{
    public function home()  {

        $getScrollBanners = Banner::where(['status' => 1,'type' => 'Scroll'])->get();
        $getFixedBanners = Banner::where(['status' => 1 ,'type' => 'Fixed'])->get();
        return view('front.home' ,compact('getScrollBanners' , 'getFixedBanners'));
    }
}
