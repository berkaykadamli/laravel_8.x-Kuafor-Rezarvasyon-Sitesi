@extends('layouts.admin')
@section('title','Add Service')

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
                                              novalidate="novalidate">
                                            @csrf
                                            <div class="form-group">
                                                <label class="control-label mb-1">Parent Id</label>
                                                <select class="form-control select2" name="category_id" style="width: 100%;">
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
                                                <input name="image" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-1">Detail</label>
                                                <input name="price" type="detail" class="form-control">
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
                                                        class="btn btn-lg btn-info btn-block">
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
