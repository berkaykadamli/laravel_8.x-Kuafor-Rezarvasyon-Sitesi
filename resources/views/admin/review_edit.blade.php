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

<form action="{{route('admin_review_update',['id'=>$data->id])}}" method="post"
      novalidate="novalidate" enctype="multipart/form-data">
    @csrf
    <table class="table table-borderless table-data3">
        <tr>
        <tr>
            <th>Id
            <td> {{$data->id}}</td>

            </th>
        </tr>
        <tr>
            <th>Name
            <td>{{$data->user->name}}</td>
            </th>
        </tr>
        <th>Title
        <td>{{$data->service->title}}</td>
        </th>
        <tr>
            <th>Subject
            <td>{{$data->subject}}</td>
            </th>
        </tr>
        <th>Review
        <td>{{$data->review}}</td>
        </th>
        <tr>
            <th>Rate
            <td>{{$data->rate}}</td>
            </th>
        </tr>
        <tr>
            <th>IP
            <td>{{$data->IP}}</td>
        </tr>
        </th>
        <tr>
            <th>Status
            <td>
                <select name="status">
                    <option selected>{{$data->status}}</option>
                    <option>True</option>
                    <option>False</option>
                </select>
            </td>
            </th>
        </tr>

        </thead>

    </table>


    <div>
        <button id="payment-button" type="submit"
                class="btn btn-lg btn-info ">
            <span id="payment-button-amount">Add Service</span>
            <span id="payment-button-sending"
                  style="display:none;">Sending…</span>
        </button>
    </div>
</form>
</body>
</html>
