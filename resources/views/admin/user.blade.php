@extends('layouts.admin')
@section('title','User List')
@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="mr-2 fa fa-align-justify"></i>
                                <strong class="card-title" v-if="headerText">Service List</strong>
                            </div>
                            <hr>
                            <div class="card-body">
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>User Photo</th>
                                            <th>Name</th>
                                            <th>E mail</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                            <th>Roles</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($datalist as $db)
                                            <tr>
                                                <td>{{$db->id}}</td>
                                                <td>
                                                    @if($db->profile_photo_path)
                                                        <img
                                                            src="{{\Illuminate\Support\Facades\Storage::url($db->profile_photo_path)}}"
                                                            height="50" style="border-radius: 10px" alt="">
                                                    @endif

                                                </td>
                                                <td>{{$db->name}}</td>
                                                <td>{{$db->email}}</td>
                                                <td>{{$db->phone}}</td>
                                                <td>{{$db->address}}</td>


                                                {{--                                                <td>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($db->category_id,$db->title)}}</td>--}}

                                                <td>
                                                    @foreach($db->roles as $row)
                                                        {{$row->name}},
                                                    @endforeach
                                                    <a href="{{route('admin_user_roles',['id'=>$db->id])}}"
                                                       onclick="return !window.open(this.href,'','top=50 left=100 width=800, height=600')">
                                                        <i class="nav-icon fas fa-plus-circle"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="{{route('admin_user_edit',['id'=>$db->id])}}"
                                                           class="btn btn-outline-success">Edit
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a
                                                            href="{{route('admin_user_delete',['id'=>$db->id])}}"
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
