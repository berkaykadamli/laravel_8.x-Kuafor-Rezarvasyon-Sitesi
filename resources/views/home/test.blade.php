<!DOCTYPE html>
<html>
<title>Laravel Test Page </title>
<body>

<h1>This is my test Page</h1>
Id : {{$id}}<br>
Name : {{$name}}<br>

<?php
    echo "From here php code started ...<br>";
    for ($i = 1; $i <= $id; $i++) {
        echo "<br>$i -> $name";
    }


?>
<a href="{{route('home')}}">Ana Sayfa</a>
</body>
</html>
