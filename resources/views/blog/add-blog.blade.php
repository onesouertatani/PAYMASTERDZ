
@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{ URL::to('assets/plugins/summernote/summernote-bs4.min.css') }}">
<div class="page-wrapper">
            <div class="content container-fluid">
                <div class="row">
                    <div class="col-xl-12">

                        <div class="page-header">
                            <div class="row">
                            <div class="col-sm-12">
                        <div class="page-sub-header">
                        <h3 class="page-title">{{ __('messages.t250') }}</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('messages.t267') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('messages.t248') }}</li>
                            </ul>
                        </div>
                    </div>
                            </div>
                        </div>
                        <form action="{{ route('blog/add/save') }}" method="POST" enctype="multipart/form-data">
                                @csrf                       
                        <div class="card">
                            <div class="card-body">
                                <div class="bank-inner-details">
                                    <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label>{{ __('messages.t279') }}<span class="text-danger">*</span></label>
                                                <input type="text"  name="nom"class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label> Description<span class="text-danger">*</span></label>
                                                <input type="text"  name="ver"class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-6">
                                            <div class="form-group">
                                                <label> Date<span class="text-danger">*</span></label>
                                                <input type="date"  name="lien"class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label>Blog Image </label>
                                                <div class="change-photo-btn">
                                                    <div>
                                                        <p>{{ __('messages.t280') }} Image</p>
                                                    </div>
                                                    <input type="file"  name="img"  >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea id="summernote" name="description"  class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" blog-categories-btn pt-0">
                                <div class="bank-details-btn ">
<center> <button type="submit"
                                   class="btn btn-primary me-1 mb-1">{{ __('messages.t280') }}</button>
                                   </center>   </div>
                            </div>
                        </div>
          
                        </form>
                    </div>
                </div>
            </div>
        </div>
<!-- ======= <script src="{{ URL::to('assets/js/jquery-3.6.0.min.js') }}"></script> ======= -->
<script src="{{ URL::to('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ URL::to('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ URL::to('assets/js/jquery-ui.min.js') }}"></script>
<script src="{{ URL::to('assets/js/script.js') }}"></script>
@endsection