@extends('layouts.admin')
@section('title','Category List')

@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="mr-2 fa fa-align-justify"></i>
                                <strong class="card-title" v-if="headerText">Category List</strong>
                            </div>
                            <hr>

                            <a href="{{route('admin_category_add')}}" style="width: 200px;" type="button"
                               class="btn btn-block btn-info">Add Category</a>


                            <div class="card-body">
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Parent</th>
                                            <th>Title(s)</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($datalist as $db)
                                            <tr>
                                                <td>{{$db->id}}</td>
                                                <td>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($db,$db->title)}}</td>
                                                <td>{{$db->title}}</td>
                                                <td>{{$db->status}}</td>
                                                <td>
                                                    <a href="{{route('admin_category_edit',['id'=>$db->id])}}"
                                                       class="btn btn-outline-success">Edit
                                                    </a>
                                                </td>
                                                <td>
                                                    <a
                                                        href="{{route('admin_category_delete',['id'=>$db->id])}}"
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
            </div>
        </div>
    </div>
@endsection
