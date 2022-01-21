@php
    $parentCategories= \App\Http\Controllers\HomeController::categoryList();
        $setting = \App\Http\Controllers\HomeController::getSetting();
@endphp
@extends('layouts.home')

@section('title','User Reviews')


@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>User Service</h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>User Service</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <section class="inner-page">
            <div class="container">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-2 order-2 order-lg-1 d-flex flex-column align-items-lg-center">
                            <div class="icon-box mt-5 mt-lg-0" data-aos-delay="100" data-aos="zoom-in">
                                <h4>User Panel</h4>
                                <ul>
                                    <li><a href="{{route('profile')}}">My Profile</a></li>
                                    <li><a href="{{route('myaccount_service')}}">My Reservation</a></li>
                                    <li><a href="{{route('logout')}}">Logout</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="image col-lg-10 order-1 order-lg-2 " data-aos="zoom-in" data-aos-delay="100">

                            <a href="{{route('myaccount_service_add')}}" style="width: 200px;" type="button"
                               class="btn btn-block btn-info">Add Reservation</a>

                            <table class="table table-borderless table-data3">
                                <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>Title(s)</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    {{--                                <th>Edit</th>--}}
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($datalist as $db)
                                    <tr>
                                        <td>{{$db->category->title}}</td>
                                        {{--                                                <td>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($db->category_id,$db->title)}}</td>--}}
                                        <td>{{$db->title}}</td>
                                        <td>{{$db->description}}</td>
                                        <td>
                                            @if($db->status=='True')
                                                Onaylandı
                                            @else
                                                Onay Bekleniyor
                                            @endif
                                        </td>

                                        {{--                                    <td>--}}
                                        {{--                                        <a href="{{route('myaccount_service_edit',['id'=>$db->id])}}"--}}
                                        {{--                                           class="btn btn-outline-success">Edit--}}
                                        {{--                                        </a>--}}
                                        {{--                                    </td>--}}
                                        <td>
                                            <a
                                                href="{{route('myaccount_service_delete',['id'=>$db->id])}}"
                                                class="btn btn-outline-danger"
                                                onclick="return confirm('Are You Sure ?')">Delete</a>
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection

