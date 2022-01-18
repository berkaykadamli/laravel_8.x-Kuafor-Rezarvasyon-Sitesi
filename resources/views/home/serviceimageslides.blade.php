@foreach($image as $img)
        <img src="{{\Illuminate\Support\Facades\Storage::url($img->image)}}" style="height: 50%;width: 50%" alt="">
@endforeach
