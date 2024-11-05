
@extends('layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-sub-header">
                            <h3 class="page-title">{{ __('messages.t257') }}</h3>
                            <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('messages.t267') }}</a></li>
                            <li class="breadcrumb-item active">{{ __('messages.t244') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table comman-shadow">
                        <div class="card-body pb-0">
                            <div class="page-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h3 class="page-title">{{ __('messages.t244') }}</h3>
                                    </div>
                                    <div class="col-auto text-end float-end ms-auto download-grp">
                                    <a href="{{ route('list/users') }}" class="btn btn-outline-gray me-2 active"><i
                                            class="feather-list"></i></a>
                                    <a href="{{ route('user/grid/page') }}" class="btn btn-outline-gray me-2"><i
                                            class="feather-grid"></i></a>
                                    <a href="#" class="btn btn-outline-primary me-2"><i
                                            class="fas fa-download"></i> Download</a>
                                    <a href="{{ url('/newregister') }}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                                </div>
                                </div>
                            </div>

                            <div class="student-pro-list">
                                <div class="row">
                                    @foreach ($userGrid as $key=>$list )
                                    <div class="col-xl-3 col-lg-4 col-md-6 d-flex">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="student-box flex-fill">
                                                    <div class="student-img">
                                                        <a href="">
                                                            <img class="img-fluid" alt="Users Info" src="{{ URL::to('images/photo_defaults.jpg') }}" width="20%" height="20%">
                                                        </a>
                                                    </div>
                                                    <div class="student-content pb-0">
                                                        <h5><a href="{{ url('view/user/edit/'.$list->user_id) }}">{{ $list->name }}</a></h5>
                                                        @if ($list->role_name === 'Super Admin')
                                                <a class="badge badge-soft-success badge-border">{{ $list->role_name }}</a>
                                                @elseif ($list->role_name === 'Admin')
                                                <a class="badge badge-soft-warning badge-border">{{ $list->role_name }}</a>
                                                @elseif ($list->role_name === 'Normal User')
                                                <a class="badge badge-soft-danger badge-border" >{{ $list->role_name }}</a>
                                                @else 
                                                <a class="badge badge-soft-info badge-border" >{{ $list->role_name }}</a>
                                                @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
