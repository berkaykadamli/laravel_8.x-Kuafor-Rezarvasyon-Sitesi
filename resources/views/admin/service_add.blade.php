@extends('layouts.admin')
@section('title','Add Service')
@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

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
                                <strong class="card-title" v-if="headerText">Add Service </strong>
                            </div>
                            <div class="card-body">
                                <div class="card">
                                    <div class="card-header">Add Service</div>
                                    <div class="card-body">

                                        <form action="{{route('admin_service_store')}}" method="post"
                                              novalidate="novalidate" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label class="control-label mb-1">Parent Id</label>
                                                <select class="form-control select2" name="category_id"
                                                        style="width: 100%;">
                                                    <option value="0" selected="selected">Main Category</option>
                                                    @foreach($datalist as $db)
                                                        <option value="{{$db->id}}">{{$db->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-1">Title</label>
                                                <input name="title" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-1">Keywords</label>
                                                <input name="keywords" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-1">Description</label>
                                                <input name="description" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-1">Image</label>
                                                <input name="image" type="file" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-1">Detail</label>
                                                <textarea id="summernote" name="detail"></textarea>
                                                <script>
                                                    $('#summernote').summernote({
                                                        tabsize: 2,
                                                        height: 100
                                                    });
                                                </script>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-1">Price</label>
                                                <input name="price" type="number" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label mb-1">Status</label>
                                                <select class="form-control select2" name="status" style="width: 100%;">
                                                    <option selected="selected">False</option>
                                                    <option>True</option>
                                                </select>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
