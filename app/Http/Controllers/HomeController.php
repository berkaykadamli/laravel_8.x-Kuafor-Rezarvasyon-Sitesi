<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Message;
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

    public static function getSetting()
    {
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

    public function references()
    {
        $setting = Setting::first();
        return view('home.references', ['setting' => $setting]);
    }

    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact', ['setting' => $setting]);
    }

    public function sendMessage(Request $request): \Illuminate\Http\RedirectResponse
    {
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->note = $request->input('note');
        $data->status = $request->input('status');
        $data->save();
        return redirect()->route('contact')->with('success', 'Mesajınız Kaydedilmiştir, Teşekkür Ederiz ! ');
    }

}
