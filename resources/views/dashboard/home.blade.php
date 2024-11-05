
@extends('layouts.master')
@section('content')

<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('messages.t267') }}</a></li>
                            <li class="breadcrumb-item active">{{ Session::get('name') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h6>{{ __('messages.t254') }}</h6>
                                <h3>{{ $staff }}</h3>
                            </div>
                            <div class="db-icon">
                                <img src="{{ URL::to('logo/customer-service.png') }}"  height="55" width="55" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h6>{{ __('messages.t257') }}</h6>
                                <h3>{{ $userscount }}</h3>
                            </div>
                            <div class="db-icon">
                            <img src="{{ URL::to('logo/office-man.png') }}"  height="55" width="55" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h6>{{ __('messages.t248') }}</h6>
                                <h3>{{ $blogs }}</h3>
                            </div>
                            <div class="db-icon">
                            <img src="{{ URL::to('logo/agreement.png') }}"  height="55" width="55" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                            <h6>{{ __('messages.t251') }}</h6>
                            <h3>{{ $partner }}</h3>
                            </div>
                            <div class="db-icon">
                            <img src="{{ URL::to('logo/blog.png') }}"  height="55" width="55" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       



        <div class="row">
<div class="col-12 col-lg-12 col-xl-8">
<div class="row">
<div class="col-12 col-lg-8 col-xl-8 d-flex">
<div class="card flex-fill comman-shadow">
<div class="card-header">
<div class="row align-items-center">
 <div class="col-6">
<h5 class="card-title">{{ __('messages.t254') }}</h5>
</div>
<div class="col-6">
<span class="float-end view-link"><a href="{{ route('form/view/detail') }}">{{ __('messages.t258') }}</a></span>
</div>
</div>
</div>
<div class="pt-3 pb-3">
<div class="table-responsive lesson">
<table class="table table-center">
<table class="table table-hover mb-0">
<thead>
<tr>
<th>{{ __('messages.t259') }}</th>
<th>Status</th>
<th>Date</th>
</tr>
</thead>
<tbody>
@foreach ($stafflist as $key => $item)
@if ($item->sex=='EN ATTENTE')  
<tr>
<td>{{ $item->full_name }}</td>
<td><span class="badge bg-warning">{{ $item->sex }}</span></td>
<td><a href="{{ route('form/view/detail') }}" class="__cf_email__" data-cfemail="93f9fcfbfdd3f6ebf2fee3fff6bdf0fcfe">{{ $item->created_at }}</a></td>
</tr>
@endif
@endforeach
</tbody>
</table>
</table>
</div>
</div>
</div>
</div>
<div class="col-12 col-lg-4 col-xl-4 d-flex">
<div class="card flex-fill comman-shadow">
<div class="card-header">
<div class="row align-items-center">
<div class="col-12">
<h5 class="card-title">{{ __('messages.t260') }}</h5>
</div>
</div>
</div>
<div class="dash-widget">
<div class="circle-bar circle-bar1">
<div class="circle-graph1" data-percent="50">
<div class="progress-less">
<b>{{ $staffs }}/{{ $staff }}</b>
<p>{{ __('messages.t261') }}</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-12 d-flex">

<div class="card flex-fill student-space comman-shadow">
    <div class="card-header d-flex align-items-center">
        <h5 class="card-title">{{ __('messages.t265') }}</h5>
       
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table
                class="table star-student table-hover table-center table-borderless table-striped">
                <thead class="thead-light">
                    <tr>
                  
<th>ID</th>

<th>Email</th>
<th>{{ __('messages.t266') }}</th>
<th>Status</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
<tr>
    <td>{{ $user->id }}</td>
    <td>{{ $user->email }}</td>
    <td>
    <div class="award-time-list">
                    <span>{{ Carbon\Carbon::parse($user->last_seen)->diffForHumans() }}</span>
                </div> 
    </td>
    <td>
        @if(Cache::has('user-is-online-' . $user->id))
            <span class="text-success">Online</span>
        @else
            <span class="text-secondary">Offline</span>
        @endif
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
<div class="col-12 col-lg-12 col-xl-4 d-flex">
<div class="card flex-fill comman-shadow">
<div class="card-body">
<div id="calendar-doctor" class="calendar-container"></div>
<div class="calendar-info calendar-info1">
<div class="up-come-header">
<h2>{{ __('messages.t263') }}</h2>
<span><a href="{{ route('partner/add/page') }}"><i class="feather-plus"></i></a></span>
</div>
<div class="up-come-header">
<h2>{{ __('messages.t264') }}</h2>
<span><a href="{{ route('blog/add/page') }}"><i class="feather-plus"></i></a></span>
</div>




</div>
</div>
</div>
</div>
        
    </div>
</div>
@endsection
