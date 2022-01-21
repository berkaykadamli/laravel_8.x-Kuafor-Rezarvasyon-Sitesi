@extends('layouts.admin')
@section('title','Edit Service')

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
@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="mr-2 fa fa-align-justify"></i>
                                <strong class="card-title" v-if="headerText">Edit Service </strong>
                            </div>
                            <div class="card-body">
                                <div class="card">
                                    <div class="card-header">Edit Service</div>
                                    <div class="card-body">

                                        <form action="{{route('admin_user_update',['id'=>$data->id])}}"
                                              method="post"
                                              novalidate="novalidate" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label class="control-label mb-1">Name</label>
                                                <input name="name" type="text" value="{{$data->name}}"
                                                       class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-1">E- Mail</label>
                                                <input name="email" type="text" value="{{$data->email}}"
                                                       class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-1">Phone</label>
                                                <input name="phone" type="text" value="{{$data->phone}}"
                                                       class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-1">Address</label>
                                                <input name="address" type="text" value="{{$data->address}}"
                                                       class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-1">Image</label>
                                                <input name="image" type="file" class="form-control">
                                                @if($data->profile_photo_path)
                                                    <img
                                                        src="{{\Illuminate\Support\Facades\Storage::url($data->profile_photo_path)}}"
                                                        height="200" style="border-radius: 10px" alt="">
                                                @endif
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit"
                                                        class="btn btn-lg btn-info">
                                                    <span id="payment-button-amount">Update User</span>
                                                    <span id="payment-button-sending"
                                                          style="display:none;">Sending…</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
