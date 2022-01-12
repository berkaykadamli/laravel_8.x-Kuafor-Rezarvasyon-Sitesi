<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    public static function categoryList()
    {
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }

    public function index()
    {
        $setting = Setting::first();
        return view('home.index', ['setting' => $setting]);
    }

    public static function getSetting(){
        return Setting::first();
    }

    public function login()
    {
        return view('admin.login');
    }



    public function faq()
    {
        $setting = Setting::first();
        return view('home.faq', ['setting' => $setting]);

    }

    public function aboutus()
    {
        $setting = Setting::first();
        return view('home.about', ['setting' => $setting]);
    }



}
