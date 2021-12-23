@extends('layouts.admin')
@section('title','Add Category')

@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="mr-2 fa fa-align-justify"></i>
                                <strong class="card-title" v-if="headerText">Add Category </strong>
                            </div>
                            <div class="card-body">
                                Add Category Form

                                <div class="card">
                                    <div class="card-header">Credit Card</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Pay Invoice</h3>
                                        </div>
                                        <hr>
                                        <form action="{{route('admin_category_add')}}" method="post"
                                              novalidate="novalidate">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Parent Id</label>
                                                <input id="cc-pament" name="cc-payment" type="text" class="form-control"
                                                       aria-required="true" aria-invalid="false" value="">
                                            </div>

                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Title</label>
                                                <input id="cc-name" name="cc-name" type="text" class="form-control"
                                                       aria-required="true" aria-invalid="false" value="">
                                                <span class="help-block field-validation-valid"
                                                      data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>

                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Keywords</label>
                                                <input id="cc-number" name="cc-number" type="tel" class="form-control"
                                                       aria-required="true" aria-invalid="false" value="">
                                                <span class="help-block" data-valmsg-for="cc-number"
                                                      data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Description</label>
                                                <input id="cc-number" name="cc-number" type="tel" class="form-control"
                                                       aria-required="true" aria-invalid="false" value="">
                                                <span class="help-block" data-valmsg-for="cc-number"
                                                      data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Image</label>
                                                <input id="cc-number" name="cc-number" type="tel" class="form-control"
                                                       aria-required="true" aria-invalid="false" value="">
                                                <span class="help-block" data-valmsg-for="cc-number"
                                                      data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Status</label>
                                                <input id="cc-number" name="cc-number" type="tel" class="form-control"
                                                       aria-required="true" aria-invalid="false" value="">
                                                <span class="help-block" data-valmsg-for="cc-number"
                                                      data-valmsg-replace="true"></span>
                                            </div>

                                            <div>
                                                <button id="payment-button" type="submit"
                                                        class="btn btn-lg btn-info btn-block">
                                                    <span id="payment-button-amount">Add Category</span>
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
