<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Service::where('user_id',Auth::id())->get();
        return view('home.user_service', ['datalist' => $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datalist=Service::all();
        $datalistC = Category::all();

        return view('home.user_service_add',['datalist'=>$datalist,'categoryList'=>$datalistC]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Service();
        $data->category_id = $request->input('category_id');
        $data->title = $request->input('title');
        $data->description = $request->input('description');
        $data->detail = $request->input('detail');
        $data->user_id=Auth::id();
        $data->save();
        return redirect()->route('myaccount_service');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Service $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Service $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service,$id)
    {
        $data = Service::find($id);
        $datalist = Category::all();
        return view('home.user_service_edit', ['data' => $data, 'datalist' => $datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Service $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service,$id)
    {
//        $data=DB::table('services')->find($id);
        $data = Service::find($id);
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->image = Storage::putFile('images',$request->file('image'));
        $data->category_id = $request->input('category_id');
        $data->detail = $request->input('detail');
        $data->price = $request->input('price');
        $data->status = $request->input('status');
        $data->save();
        return redirect()->route('myaccount_service');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Service $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service,$id)
    {
        DB::table('services')->where('id', "=", $id)->delete();
        return redirect()->route('myaccount_service');
    }
}
