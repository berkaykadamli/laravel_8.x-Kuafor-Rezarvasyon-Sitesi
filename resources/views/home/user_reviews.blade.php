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
                    <h2>Inner Page</h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Inner Page</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <section class="inner-page">
            <div class="container">
                <div class="card-body">
                    <div class="table-responsive m-b-40">
                        <table class="table table-borderless table-data3">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title(s)</th>
                                <th>Subject</th>
                                <th>Review</th>
                                <th>Rate</th>
                                <th>Status</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datalist as $db)
                                <tr>
                                    <td>{{$db->id}}</td>
                                    <td><a href="{{route('servicedetail',['id'=>$db->service->id])}}" target="_blank">{{$db->title}}</a> </td>
                                    <td>{{$db->subject}}</td>
                                    <td>{{$db->review}}</td>
                                    <td>{{$db->rate}}</td>
                                    <td>{{$db->status}}</td>
                                    <td>{{$db->created_at}}</td>
                                    <td>
                                        <a
                                            href="{{route('destroyview_delet',['id'=>$db->id])}}"
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
        </section>

    </main><!-- End #main -->
@endsection

