<!DOCTYPE html>
<html>
<title>First Laravel Page </title>
<body>

<h1>Hoşgelmişsin kardeşim</h1>
<p>My first paragraph.</p>

{{--{{ $name }}--}}

{{--İsim :--}}
{{--<input type="text" name="isim">--}}
{{--Id : <input type="text" name="numara">--}}


<a href="{{route('test',['id'=>15,'name'=>"kadamli"])}}">Test Sayfası İçin Tıklayınız !</a>
</body>
</html>
