@php
    $parentCategories = \App\Http\Controllers\HomeController::categoryList()
@endphp

<li class="dropdown"><a href="#"><span>Categories</span> <i class="bi bi-chevron-down"></i></a>
    <ul>
        @foreach($parentCategories as $rs)
            <li class="dropdown"><a href="#"><span>{{$rs->title}}</span> <i
                        class="bi bi-chevron-right"></i></a>

                @if(count($rs->children))
                    <ul>

                        @include('home.categoryTree',['children'=>$rs->children])
                        {{--                                        <li><a href="#">Deep Drop Down 1</a></li>--}}

                    </ul>
                @endif
            </li>
        @endforeach
    </ul>
</li>
