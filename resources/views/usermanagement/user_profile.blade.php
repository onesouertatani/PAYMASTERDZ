
@extends('layouts.master')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">{{ __('messages.t247') }}</h3>
                    <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('messages.t267') }}</a></li>
                    <li class="breadcrumb-item active">{{ __('messages.t247') }}</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="profile-header">
                    <div class="row align-items-center">
                        <div class="col-auto profile-image">
                            <a href="#">
                                <img class="rounded-circle" alt="{{ $users->name }} " src="/images/{{ Session::get('avatar') }}">
                            </a>
                        </div>
                        <div class="col ms-md-n2 profile-user-info">
                            <h4 class="user-name mb-0">{{ $users->name }} </h4>
                            <h6 class="text-muted">{{ $users->position }}</h6>
                            <div class="about-text">{{ __('messages.t271') }}
</div>
                        </div>
                        <div class="col-auto profile-btn">
                            <a href="{{ url('view/user/edit/'.$users->user_id) }}" class="btn btn-primary">{{ __('messages.t270') }}</a>
                        </div>
                    </div>
                </div>
            
                <div class="tab-content profile-tab-cont">

                    <div class="tab-pane fade show active" id="per_details_tab">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title d-flex justify-content-between">
                                            <span>{{ __('messages.t272') }}</span>
                                            <a class="edit-link" 
                                                href="{{ url('view/user/edit/'.$users->user_id) }}"><i
                                                    class="far fa-edit me-1"></i>{{ __('messages.t270') }}</a>
                                        </h5>
                                        <div class="row">
                                            <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">{{ __('messages.t259') }}</p>
                                            <p class="col-sm-9">{{ $users->name }}</p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">{{ __('messages.t269') }}</p>
                                            <p class="col-sm-9">{{ $users->department  }}</p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Email</p>
                                            <p class="col-sm-9"><a href="/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="a1cbcec9cfc5cec4e1c4d9c0ccd1cdc48fc2cecc">{{ $users->email }}</a>
                                            </p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">{{ __('messages.t224') }}</p>
                                            <p class="col-sm-9">{{ $users->phone_number }}</p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-3 text-muted text-sm-end mb-0">Address</p>
                                            <p class="col-sm-9 mb-0">Algerie</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">

                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title d-flex justify-content-between">
                                            <span>{{ __('messages.t273') }}</span>
                                            <a class="edit-link" href="{{ url('view/user/edit/'.$users->user_id) }}"><i class="far fa-edit me-1"></i>{{ __('messages.t270') }}</a>
                                        </h5>
                                        <button class="btn btn-success" type="button"><i class="fe fe-check-verified"></i> Active</button>
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
