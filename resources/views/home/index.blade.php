{{--Extending the layout from the parent class -> Main --}}
@extends('layouts.main')


{{--Calling a function--}}
@section('title','Sub Page Title')



@section('sidebar')
    @parent
    {{--You can enter value in here. It will show first main.blade.php then this page --}}
    <div class="col-sm-4">

        <h3>Column 1</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>

    </div>
@endsection


{{--You are writing in the div. In the main.blade.php see the content yield--}}
@section('content')
    @parent
    <ul>
        <li>bilgisayar</li>
        <li>Elektronik</li>
        <li>Ev Eşyaları</li>

    </ul>

    <div class="col-sm-4">

        <h3>Column 2</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>

    </div>
@endsection


{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<title>First Laravel Page </title>--}}
{{--<body>--}}

{{--<h1>Hoşgelmişsin kardeşim</h1>--}}
{{--<p>My first paragraph.</p>--}}

{{--{{ $name }}--}}

{{--İsim :--}}
{{--<input type="text" name="isim">--}}
{{--Id : <input type="text" name="numara">--}}


{{--<a href="{{route('test',['id'=>15,'name'=>"kadamli"])}}">Test Sayfası İçin Tıklayınız !</a>--}}
{{--</body>--}}
{{--</html>--}}
