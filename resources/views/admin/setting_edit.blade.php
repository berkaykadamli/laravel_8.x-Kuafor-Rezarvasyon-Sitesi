@extends('layouts.admin')
@section('title','Edit Setting')

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
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Settings</h4>
                            </div>
                            <div class="card-body">
                                <div class="default-tab">

                                    <form action="{{route('admin_setting_update',['id'=>$data->id])}}"
                                          method="post"
                                          novalidate="novalidate" enctype="multipart/form-data">
                                        @csrf
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                                   href="#nav-setting" role="tab" aria-controls="nav-home"
                                                   aria-selected="true">General Setting</a>
                                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                                                   href="#nav-smtp" role="tab" aria-controls="nav-profile"
                                                   aria-selected="false">Smtp Email</a>
                                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                                   href="#nav-social-media" role="tab" aria-controls="nav-contact"
                                                   aria-selected="false">Social Media</a>
                                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                                   href="#nav-about-us" role="tab" aria-controls="nav-contact"
                                                   aria-selected="false">About Us</a>
                                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                                   href="#nav-contact" role="tab" aria-controls="nav-contact"
                                                   aria-selected="false">Contact Page</a>
                                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                                   href="#nav-references" role="tab" aria-controls="nav-contact"
                                                   aria-selected="false">References</a>
                                            </div>
                                        </nav>
                                        <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-setting" role="tabpanel"
                                                 aria-labelledby="nav-home-tab">
                                                <p>
                                                <div class="form-group">
                                                    <label class="control-label mb-1">Title</label>
                                                    <input name="title" type="text" value="{{$data->title}}"
                                                           class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label mb-1">Keywords</label>
                                                    <input name="keywords" type="text" value="{{$data->keywords}}"
                                                           class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label mb-1">Description</label>
                                                    <input name="description" type="text" value="{{$data->description}}"
                                                           class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label mb-1">Company</label>
                                                    <input name="company" type="text" value="{{$data->company}}"
                                                           class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label mb-1">Address</label>
                                                    <input name="address" type="text" value="{{$data->address}}"
                                                           class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label mb-1">Phone</label>
                                                    <input name="phone" type="text" value="{{$data->phone}}"
                                                           class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label mb-1">Fax</label>
                                                    <input name="fax" type="text" value="{{$data->fax}}"
                                                           class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label mb-1">E - Mail</label>
                                                    <input name="email" type="text" value="{{$data->email}}"
                                                           class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label mb-1">Status</label>
                                                    <select class="form-control select2" name="status"
                                                            style="width: 100%;">
                                                        <option selected="selected"> {{$data->status}}</option>
                                                        <option>False</option>
                                                        <option>True</option>
                                                    </select>
                                                </div>
                                                </p>
                                            </div>
                                            <div class="tab-pane fade" id="nav-smtp" role="tabpanel"
                                                 aria-labelledby="nav-profile-tab">
                                                <p>
                                                <div class="form-group">
                                                    <label class="control-label mb-1">Smtp Server</label>
                                                    <input name="smtpserver" type="text" value="{{$data->smtpserver}}"
                                                           class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label mb-1">Smtp Email</label>
                                                    <input name="smtpemail" type="text" value="{{$data->smtpemail}}"
                                                           class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label mb-1">Smtp Password</label>
                                                    <input name="smtppassword" type="password"
                                                           value="{{$data->smtppassword}}"
                                                           class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label mb-1">Smtp Port</label>
                                                    <input name="smtpport" type="number" value="{{$data->smtpport}}"
                                                           class="form-control">
                                                </div>
                                                </p>
                                            </div>
                                            <div class="tab-pane fade" id="nav-social-media" role="tabpanel"
                                                 aria-labelledby="nav-contact-tab">
                                                <p>
                                                <div class="form-group">
                                                    <label class="control-label mb-1">Instagram</label>
                                                    <input name="instagram" type="text" value="{{$data->instagram}}"
                                                           class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label mb-1">Facebook</label>
                                                    <input name="facebook" type="text" value="{{$data->facebook}}"
                                                           class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label mb-1">Twitter</label>
                                                    <input name="twitter" type="text" value="{{$data->twitter}}"
                                                           class="form-control">
                                                </div>
                                                </p>
                                            </div>
                                            <div class="tab-pane fade" id="nav-about-us" role="tabpanel"
                                                 aria-labelledby="nav-contact-tab">
                                                <p>
                                                <div class="form-group">
                                                    <label class="control-label mb-1">About us</label>
                                                    <textarea id="aboutus" name="aboutus">{{$data->aboutus}}</textarea>
                                                    <script>
                                                        $('#aboutus').summernote({
                                                            tabsize: 2,
                                                            height: 100
                                                        });
                                                    </script>
                                                </div>
                                                </p>
                                            </div>
                                            <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                                 aria-labelledby="nav-contact-tab">
                                                <p>
                                                <div class="form-group">
                                                    <label class="control-label mb-1">Contact</label>
                                                    <textarea id="contact" name="contact">{{$data->contact}}</textarea>
                                                    <script>
                                                        $('#contact').summernote({
                                                            tabsize: 2,
                                                            height: 100
                                                        });
                                                    </script>
                                                </div>
                                                </p>
                                            </div>
                                            <div class="tab-pane fade" id="nav-references" role="tabpanel"
                                                 aria-labelledby="nav-contact-tab">
                                                <p>
                                                <div class="form-group">
                                                    <label class="control-label mb-1">References</label>
                                                    <textarea id="references"
                                                              name="references">{{$data->references}}</textarea>
                                                    <script>
                                                        $('#references').summernote({
                                                            tabsize: 2,
                                                            height: 100
                                                        });
                                                    </script>
                                                </div>

                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div>
                                    <button id="payment-button" type="submit"
                                            class="btn btn-lg btn-info ">
                                        <span id="payment-button-amount">Update Setting</span>
                                        <span id="payment-button-sending"
                                              style="display:none;">Sending…</span>
                                    </button>
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
    </div>
    </div>
    </div>
@endsection
