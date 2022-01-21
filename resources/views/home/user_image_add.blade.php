<html>
<head>
    <!-- Fontfaces CSS-->
    <link href="{{asset('assets')}}/admin/css/font-face.css" rel="stylesheet" media="all">
    <link href="{{asset('assets')}}/admin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="{{asset('assets')}}/admin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="{{asset('assets')}}/admin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('assets')}}/admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('assets')}}/admin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="{{asset('assets')}}/admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="{{asset('assets')}}/admin/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="{{asset('assets')}}/admin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="{{asset('assets')}}/admin/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="{{asset('assets')}}/admin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="{{asset('assets')}}/admin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('assets')}}/admin/css/theme.css" rel="stylesheet" media="all">
</head>
<body>
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="mr-2 fa fa-align-justify"></i>
                                <strong class="card-title" v-if="headerText">Add Image </strong>
                            </div>
                            <div class="card-body">
                                <div class="card">
                                    <div class="card-header">{{$data->title}}</div>
                                    <div class="card-body">

                                        <form action="{{route('myaccount_image_store',['id'=>$data->id])}}" method="post"
                                              novalidate="novalidate" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label class="control-label mb-1">Title</label>
                                                <input name="title" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-1">Image</label>
                                                <input name="image" type="file" class="form-control">
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit"
                                                        class="btn btn-lg btn-info btn-block">
                                                    <span id="payment-button-amount">Add Image</span>
                                                    <span id="payment-button-sending"
                                                          style="display:none;">Sending…</span>
                                                </button>
                                            </div>
                                        </form>
                                        <div class="card-body">
                                            <div class="table-responsive m-b-40">
                                                <table class="table table-borderless table-data3">
                                                    <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Service_id</th>
                                                        <th>Title(s)</th>
                                                        <th>Images</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($images as $db)
                                                        <tr>
                                                            <td>{{$db->id}}</td>
                                                            <td>{{$db->service_id}}</td>
                                                            <td>{{$db->title}}</td>
                                                            <td>@if($db->image)
                                                                    <img
                                                                        src="{{\Illuminate\Support\Facades\Storage::url($db->image)}}"
                                                                        height="30%" width="30%"
                                                                        alt="{{$db->title}}">
                                                                @endif</td>
                                                            <td>
                                                                <a
                                                                    href="{{route('myaccount_image_delete',['id'=>$db->id,'service_id'=>$data->id])}}"
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
            </div>
        </div>
    </div>


</body>
</html>

