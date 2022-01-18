@foreach($children as $subcategory)

    @if(count($subcategory->children))
        <li>{{$subcategory->title}}</li>
        <ul>@include('home.categoryTree',['children'=>$subcategory->children])</ul>
    @else
        <li><a href="{{route('categoryproduct',['id'=>$subcategory->id])}}">{{$subcategory->title}}</a></li>
    @endif

@endforeach
