<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Message;
use App\Models\Review;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    public static function categoryList()
    {
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }

    public static function countreview($id)
    {
        return Review::where('service_id', $id)->count();
    }

    public static function averagereview($id)
    {
        return Review::where('service_id', $id)->average('rate');
    }

    public function index()
    {
        $setting = Setting::first();
        $slider = Service::select('title', 'image', 'price')->limit(4)->get();

        return view('home.index', ['setting' => $setting, 'slider' => $slider]);
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

    public function getservice(Request $request)
    {
        $data = Service::where('title', $request->input('search'))->first();
        return redirect()->route('servicedetail', ['id' => $data->id]);
    }

    public function categoryproduct($id)
    {
        $datalist = Service::where('category_id', $id)->get();
        $data = Category::find($id);
        return view('home.category_services', ['datalist' => $datalist, 'data' => $data]);
    }

    public function servicedetail($id)
    {
        $data = Service::find($id);
        $image = Image::where('service_id', $id)->get();
        $reviews = Review::where('service_id', $id)->get();

        return view('home.service_detail', ['data' => $data, 'image' => $image, 'reviews' => $reviews]);
    }

    public function serviceimageslider($id)
    {
        $data = Service::find($id);
        $image = Image::where('service_id', $id)->get();
        return view('home.serviceimageslides', ['data' => $data, 'image' => $image]);
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
