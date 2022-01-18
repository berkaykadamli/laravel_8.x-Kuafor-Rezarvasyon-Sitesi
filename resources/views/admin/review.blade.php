@extends('layouts.admin')
@section('title','Review List')
@section('content')

    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="mr-2 fa fa-align-justify"></i>
                            <strong class="card-title" v-if="headerText">Modals</strong>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive m-b-40">
                                <table class="table table-borderless table-data3">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Service</th>
                                        <th>Subject</th>
                                        <th>Review</th>
                                        <th>Rate</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>Edit</th>
                                        <th>Delete</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($datalist as $db)
                                        <tr>
                                            <td>{{$db->id}}</td>
                                            <td>{{$db->user->name}}</td>
                                            <td><a href="{{route('servicedetail',['id'=>$db->service->id])}}"
                                                   target="_blank">{{$db->service->title}}</a></td>
                                            <td>{{$db->subject}}</td>
                                            <td>{{$db->review}}</td>
                                            <td>{{$db->rate}}</td>
                                            <td>{{$db->status}}</td>
                                            <td>{{$db->created_at}}</td>

                                            <td>
                                                <a href="{{route('admin_review_show',['id'=>$db->id])}}"
                                                   onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=7000')"
                                                   class="btn btn-outline-success">Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a
                                                    href="{{route('admin_review_delete',['id'=>$db->id])}}"
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
@endsection

