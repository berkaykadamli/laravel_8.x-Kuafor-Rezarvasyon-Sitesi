<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('layouts.main');
    }

    public function test1($id, $name)
    {
        return view('home.test',['id'=>$id,'name'=>$name]);


        echo "Id : " . $id . "<br> İsim : " . $name;
        for ($i = 1; $i <= $id; $i++) {
            echo "<br>$i -> $name";
        }
    }
}
