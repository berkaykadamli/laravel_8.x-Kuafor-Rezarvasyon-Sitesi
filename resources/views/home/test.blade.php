<!DOCTYPE html>
<html>
<title>Laravel Test Page </title>
<body>

<h1>This is my test Page</h1>
Number 1  : {{$n1}}<br>
Number 2 : {{$n2}}<br>

<?php
//    echo "From here php code started ...<br>";
//    for ($i = 1; $i <= $id; $i++) {
//        echo "<br>$i -> $name";
//    }
//?>
<br>
The current UNIX timestamp is {{ time() }}. <br>





<a href="{{route('home')}}">Ana Sayfa</a>
</body>
</html>
