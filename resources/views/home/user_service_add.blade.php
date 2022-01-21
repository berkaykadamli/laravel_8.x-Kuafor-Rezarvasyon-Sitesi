@php
    $parentCategories= \App\Http\Controllers\HomeController::categoryList();
        $setting = \App\Http\Controllers\HomeController::getSetting();
@endphp

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
@endsection

@extends('layouts.home')

@section('title','User Profile')


@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Inner Page</h2>
                    <ol>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>Service Add</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <section class="inner-page">
            <div class="container">
                <form action="{{route('myaccount_service_store')}}" method="post"
                      novalidate="novalidate" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="control-label mb-1">Randevu Alınacak Servis</label>
                        <select class="form-control select2" name="category_id"
                                style="width: 100%;">
                            <option value="0" selected="selected">Main Category</option>
                            @foreach($categoryList as $db)
                                <option value="{{$db->id}}"
                                        selected="selected"  >{{$db->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-1">Title</label>
                        <input name="title" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-1">Description</label>
                        <input name="description" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-1">Detail</label>
                        <textarea id="detail" name="detail"></textarea>
                        <script>
                            $('#detail').summernote({
                                tabsize: 2,
                                height: 100
                            });
                        </script>
                    </div>
                    <div>
                        <button id="payment-button" type="submit"
                                class="btn btn-lg btn-info ">
                            <span id="payment-button-amount">Add Service</span>
                            <span id="payment-button-sending"
                                  style="display:none;">Sending…</span>
                        </button>
                    </div>
                </form>
            </div>
        </section>

    </main><!-- End #main -->
@endsection

