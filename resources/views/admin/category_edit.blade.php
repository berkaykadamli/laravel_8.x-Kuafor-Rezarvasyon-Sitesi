@extends('layouts.admin')
@section('title','Edit Category')

@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="mr-2 fa fa-align-justify"></i>
                                <strong class="card-title" v-if="headerText">Edit Category </strong>
                            </div>
                            <div class="card-body">
                                <div class="card">
                                    <div class="card-header">Edit Category</div>
                                    <div class="card-body">
                                        <form action="{{route('admin_category_update',['id'=>$data->id])}}"
                                              method="post"
                                              novalidate="novalidate">
                                            @csrf
                                            <div class="form-group">
                                                <label class="control-label mb-1">Parent Id</label>
                                                <select class="form-control select2" name="parent_id"
                                                        style="width: 100%;">
                                                    <option value="0">Main Category</option>
                                                    @foreach($datalist as $db)
                                                        <option value="{{$db->id}}"
                                                                @if ($db->id  == $db->parent_id) selected="selected" @endif >{{$db->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-1">Title</label>
                                                <input name="title" value="{{$data->title}}" type="text"
                                                       class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-1">Keywords</label>
                                                <input name="keywords" value="{{$data->keywords}}" type="text"
                                                       class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-1">Description</label>
                                                <input name="description" value="{{$data->description}}" type="text"
                                                       class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-1">Image</label>
                                                <input name="image" value="{{$data->image}}" type="text"
                                                       class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-1">Status</label>
                                                <select class="form-control select2" name="status" style="width: 100%;">
                                                    <option selected="selected"> {{$data->status}}</option>
                                                    <option>False</option>
                                                    <option>True</option>

                                                </select>
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit"
                                                        class="btn btn-lg btn-info btn-block">
                                                    <span id="payment-button-amount">Update Category</span>
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
