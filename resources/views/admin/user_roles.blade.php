<html>
<head>

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
</head>
<body>


    @csrf
    <table class="table table-borderless table-data3">

        <tr>
            <th>Id</th>
            <td> {{$data->id}}</td>
        </tr>
        <tr>
            <th>Name</th>
            <td>{{$data->name}}</td>
        </tr>
        <tr>
            <th>E Mail</th>
            <td>{{$data->email}}</td>
        </tr>
        <tr>
            <th>Roles</th>
            <td>
                <table>
                    @foreach($data->roles as $row)
                        <tr>
                            <td>{{$row->name}}</td>
                            <td><a
                                    href="{{route('admin_user_role_delete',['userid'=>$data->id,'roleid'=>$row->id])}}"
                                    class="btn btn-outline-danger"
                                    onclick="return confirm('Are You Sure ?')">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </td>
        </tr>

        <tr>
            <th>Add Role</th>
            <td>
                <form role="form" action="{{route('admin_user_role_add',['id'=>$data->id])}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <select name="roleid">
                        @foreach($datalist as $rs)
                            <option value="{{$rs->id}}">{{$rs->name}}</option>
                        @endforeach
                    </select>
                    <div>
                        <button id="payment-button" type="submit"
                                class="btn btn-lg btn-info ">
                            <span id="payment-button-amount">Add Service</span>
                            <span id="payment-button-sending"
                                  style="display:none;">Sending…</span>
                        </button>
                    </div>
                </form>
            </td>
        </tr>
    </table>
</body>
</html>
